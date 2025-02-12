<?php

namespace Tests\Feature;

use App\Models\Kid;
use App\Models\Toy;
use Tests\TestCase;
use App\Models\MinimumAge;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get(route('santa'));

        $response->assertStatus(200);
        $response->assertViewIs('santa');
        $response->assertViewHas('kids');
    }

    public function testAssignToys()
    {
        MinimumAge::factory()->count(3)->create();
        $toys = Toy::factory()->count(3)->create();

        $goodKidUnder18 = Kid::factory()->create([
            'name' => "Jonathan",
            'surname' => "Torreblanca",
            'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242914/77421841xlarge_gwqybg.jpg",
            'age' => 12,
            'gender' => "boy",
            'atitude' => "good",
            'country' => "spain",
        ]);
        $goodKidUnder18->toys()->attach($toys[0]->id);

        $goodKidAdult = Kid::factory()->create([
            'atitude' => 'good',
            'age' => 25,
        ]);
        $goodKidAdult->toys()->attach($toys[1]->id);

        $response = $this->post(route('assignToys'));

        $this->assertDatabaseHas('kid_toy', ['kid_id' => $goodKidUnder18->id]);
        $this->assertDatabaseHas('kid_toy', ['kid_id' => $goodKidAdult->id]);

        $goodKidUnder18Toys = $goodKidUnder18->toys;
        $goodKidAdultToys = $goodKidAdult->toys;

        $this->assertCount(1, $goodKidUnder18Toys);
        $this->assertCount(1, $goodKidAdultToys);

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
    }

    public function testAssignToysToGoodKidBetween18And99()
    {
        $kid = Kid::factory()->create(['atitude' => 'good', 'age' => 25]);
        $toys = Toy::factory()->count(5)->create();
        $kid->toys()->attach($toys->pluck('id'));

        $response = $this->post(route('assignToys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
        $this->assertDatabaseHas('kid_toy', ['kid_id' => $kid->id]);
    }

    public function testAssignToysToGoodKidUnder18()
    {
        $kid = Kid::factory()->create(['atitude' => 'good', 'age' => 10]);
        $toys = Toy::factory()->count(5)->create();
        $kid->toys()->attach($toys->pluck('id'));

        $response = $this->post(route('assignToys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
        $this->assertDatabaseHas('kid_toy', ['kid_id' => $kid->id]);
    }

    public function testRemoveAssignedToys()
    {
        $kid = Kid::factory()->create();
        $toy = Toy::factory()->create();
        $kid->toys()->attach($toy->id);

        $this->assertDatabaseHas('kid_toy', ['kid_id' => $kid->id, 'toy_id' => $toy->id]);

        $response = $this->delete(route('removeAssignedToys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'All assigned toys have been removed.');
        $this->assertDatabaseMissing('kid_toy', ['kid_id' => $kid->id]);
    }

    public function testAssignCoalToy()
    {
        $this->withoutExceptionHandling();
        $this->seed(DatabaseSeeder::class);

        MinimumAge::factory()->count(3)->create();
        $badKid = Kid::factory()->create(['atitude' => 'bad']);
        $coalToyIds = Toy::whereIn('name', ['Mineral Charcoal', 'Vegetal Charcoal', 'Mystery Charcoal'])->pluck('id');

        $response = $this->post(route('assignToys'));

        $this->assertDatabaseHas('kid_toy', [
            'kid_id' => $badKid->id,
            'toy_id' => $coalToyIds->first(),
        ]);

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
    }

    public function testShow()
    {
        $kid = Kid::factory()->create();

        $response = $this->get(route('santaShow', $kid->id));

        $response->assertStatus(200);
        $response->assertViewIs('santaShow');
        $response->assertViewHas('kids');
    }

}

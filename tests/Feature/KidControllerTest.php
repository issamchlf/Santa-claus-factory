<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Kid;
use App\Models\Toy;
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

    public function testAssignToysToBadKid()
    {
        $kid = Kid::factory()->create(['atitude' => 'bad']);

        $response = $this->post(route('assignToys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
        $this->assertDatabaseHas('toy_kid', ['kid_id' => $kid->id]);
    }

    public function testAssignToysToGoodKidBetween18And99()
    {
        $kid = Kid::factory()->create(['atitude' => 'good', 'age' => 25]);

        $response = $this->post(route('assignToys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
        $this->assertDatabaseHas('toy_kid', ['kid_id' => $kid->id]);
    }

    public function testAssignToysToGoodKidUnder18()
    {
        $kid = Kid::factory()->create(['atitude' => 'good', 'age' => 10]);

        $response = $this->post(route('assignToys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'Toys have been assigned to all children!');
        $this->assertDatabaseHas('toy_kid', ['kid_id' => $kid->id]);
    }

    public function testRemoveAssignedToys()
    {
        $kid = Kid::factory()->create();
        $toy = Toy::factory()->create();
        $kid->toys()->attach($toy->id);

        $response = $this->post(route('remove-assigned-toys'));

        $response->assertRedirect(route('santa'));
        $response->assertSessionHas('success', 'All assigned toys have been removed.');
        $this->assertDatabaseMissing('toy_kid', ['kid_id' => $kid->id]);
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
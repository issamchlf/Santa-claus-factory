<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\MinimumAge;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Toy;
class MinimumAgeTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_minimum_age()
    {
        $data = [
            'min_age' => 3,
            'max_age' => 7,
        ];

        $minimumAge = MinimumAge::create($data);

        $this->assertDatabaseHas('minimum_age', $data);
    }

    /** @test */
    public function it_can_update_a_minimum_age()
    {
        $minimumAge = MinimumAge::factory()->create();

        $minimumAge->update([
            'min_age' => 5,
            'max_age' => 10,
        ]);

        $this->assertDatabaseHas('minimum_age', [
            'id' => $minimumAge->id,
            'min_age' => 5,
            'max_age' => 10,
        ]);
    }

    /** @test */
    public function it_can_delete_a_minimum_age()
    {
        $minimumAge = MinimumAge::factory()->create();

        $minimumAge->delete();

        $this->assertDatabaseMissing('minimum_age', [
            'id' => $minimumAge->id,
        ]);
    }

    /** @test */
    public function it_can_retrieve_related_toys()
    {
        $minimumAge = MinimumAge::factory()->create();
        $toy = Toy::factory()->create(['minimum_age_id' => $minimumAge->id]);

        $this->assertTrue($minimumAge->toys->contains($toy));
    }
}

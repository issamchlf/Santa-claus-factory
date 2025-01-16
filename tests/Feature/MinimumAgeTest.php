<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\MinimumAge;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Toy;
class MinimumAgeTest extends TestCase
{

    use RefreshDatabase;

    
    public function itCanCreateAMinimumAge()
    {
        $data = [
            'min_age' => 3,
            'max_age' => 7,
        ];

        $minimumAge = MinimumAge::create($data);

        $this->assertDatabaseHas('minimum_age', $data);
    }

   
    public function itCanUpdateAMinimumAge()
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

    
    public function itCanDeleteAMinimumAge()
    {
        $minimumAge = MinimumAge::factory()->create();

        $minimumAge->delete();

        $this->assertDatabaseMissing('minimum_age', [
            'id' => $minimumAge->id,
        ]);
    }

    
    public function itCanRetrieveRelatedToys()
    {
        $minimumAge = MinimumAge::factory()->create();
        $toy = Toy::factory()->create(['minimum_age_id' => $minimumAge->id]);

        $this->assertTrue($minimumAge->toys->contains($toy));
    }
}



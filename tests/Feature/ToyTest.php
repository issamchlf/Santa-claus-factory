<?php

namespace Tests\Feature;

use App\Models\Kid;
use App\Models\Toy;
use Tests\TestCase;
use App\Models\MinimumAge;
use Illuminate\Http\Request;
use Database\Seeders\DatabaseSeeder;
use App\Http\Controllers\ToyController;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ToyTest extends TestCase
{
    use RefreshDatabase;
    
        public function test_CheckIfElveCanGetAllToysInView()
        {
            $this->withoutExceptionHandling();
            $this->seed(DatabaseSeeder::class);
            
            $toy = Toy::first();
        
            $minimumAge = MinimumAge::factory()->create();
            $toy->minimumAge()->associate($minimumAge);
            $toy->save();
        
            $kids = Kid::inRandomOrder()->limit(3)->get();
            $toy->kids()->attach($kids->pluck('id'));
        
            $this->assertEquals($minimumAge->id, $toy->minimumAge->id);
        
            $this->assertCount(3, $toy->kids);
        
            $response = $this->get(route('elve')); 
            $response->assertStatus(200);
        }
    
    
        public function testAssignAgeRange()
        {
            $minimumAge = MinimumAge::factory()->create();
            $toy = Toy::factory()->create();
    
            $request = Request::create('/toys/assign-age-range', 'POST', [
                'age_range_id' => $minimumAge->id,
            ]);
    
            $controller = new ToyController();
            $response = $controller->assignAgeRange($request, $toy);
    
            $this->assertEquals($minimumAge->id, $toy->fresh()->minimum_age_id);
            $this->assertEquals(302, $response->getStatusCode());
            $this->assertEquals('Age range assigned successfully.', session('success'));
        }
    
        public function testShow()
        {
            $toy = Toy::factory()->create();
    
            $response = $this->get(route('elveShow', $toy->id));
    
            $response->assertStatus(200);
            $response->assertViewHas('toys');
        }
   
    
}

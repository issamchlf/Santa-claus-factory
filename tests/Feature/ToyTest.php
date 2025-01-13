<?php

namespace Tests\Feature;

use App\Models\Toy;
use App\Models\MinimumAge;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ToyTest extends TestCase
{
    use RefreshDatabase;
    
        
        public function test_CheckIfElveCanGetAllToysInView()
        {
            $this->withoutExceptionHandling();
            MinimumAge::factory()->create();
            Toy::factory(5)->create();

            $response = $this->get('/elve');
            $response->assertStatus(200)
                ->assertViewIs('elves');
            
        }
    

    /** @test */
    //public function it_belongs_to_many_kids()
    
}

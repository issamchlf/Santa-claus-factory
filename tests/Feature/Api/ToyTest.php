<?php

namespace Tests\Feature\Api;

use App\Models\Toy;
use Tests\TestCase;
use App\Models\MinimumAge;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_CheckIfReceiveAllEntryOfToyInJsonFile(){
        $Minimum_ages = MinimumAge::create([
            'min_age'=> 1,
            'max_age'=> 3,
        ]);
        $toys = Toy::create([
            'name'=>"testn",
            'image'=>"testi",
            'description'=>"testd",
            'minimum_age_id'=> 1
        ]);

        $response = $this->get(route('apiindex'));

        $response->assertStatus(200)
                ->assertJsonFragment([
                    'name'=>"testn",
                    'image'=>"testi",
                    'description'=>"testd",
                    'minimum_age_id'=> 1
                ]);
    }
}

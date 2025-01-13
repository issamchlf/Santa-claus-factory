<?php

namespace Tests\Feature;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfElfCanGetAllToysInView(){
        $this->withoutExceptionHandling();

        Kid::factory(5)->create();
        Kid::all();

        $response = $this->get('/santa');
        $response->assertStatus(200)
            ->assertViewIs('santa');
    }

    // public function test_CheckIfElfCanGetOneToyInView() {
    //     $this->withoutExceptionHandling();

    //     $toy = Toy::factory()->create();

    //     $response = $this->get('/elf/' . $toy->id);

    //     $response->assertStatus(200)
    //         ->assertViewIs('elfShow')
    //         ->assertViewHas('elf', $toy);
    // }
}
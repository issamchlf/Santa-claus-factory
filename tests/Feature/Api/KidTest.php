<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Kid;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    /*public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    */
    public function test_indexIsWorking()
    {
        $response = $this->get('/');

        $response = $this->get(route('apiindexSanta'));

        $response->assertStatus(200);
    }
    
    public function test_show_returns_a_kid()
{
    
    $kid = Kid::factory()->create();

    
    $response = $this->getJson("/api/santa/{$kid->id}");

    
    $response->assertStatus(200);

    
    $response->assertJson($kid->toArray());

    $response = $this->get(route('apishowSanta', ['id' => $kid->id]));
}


public function test_store_creates_a_new_kid()
{
    $data = [
        'name' => 'updated name',
        'surname' => 'updated surname',
        'foto' => 'null',
        'age' => '10',
        'gender' => 'updated',
        'atitude' => 'updated atitude',
        'country' => 'updated country',
    ];

    $response = $this->postJson('/api/santa', $data);

    $response->assertStatus(201);
    $this->assertDatabaseHas('kids', $data);

    $response = $this->post(route('apistoreSanta'), $data);
}

public function test_destroy_deletes_a_kid()
{
    $kid = Kid::factory()->create();

    $response = $this->deleteJson("/api/santa/{$kid->id}");

    $response = $this->delete(route('apidestroySanta', ['id' => $kid->id]));

    $response->assertStatus(204);
    $this->assertDatabaseMissing('kids', [
        'id' => $kid->id,
    ]);
}

public function test_update_modifies_a_kid()
{

    $kid = Kid::factory()->create();

    $data = [
        'name' => 'Updated Name',
        'surname' => 'Updated Surname',
        'foto' => null,
        'age' => 12,
        'gender' => 'Updated',
        'atitude' => 'Updated Atitude',
        'country' => 'Updated Country',
    ];

    
    $response = $this->putJson("/api/santa/{$kid->id}", $data);

    $response = $this->put(route('apiupdateSanta', ['id' => $kid->id]), $data);

    $response->assertStatus(200);

    
    $this->assertDatabaseHas('kids', [
        'id' => $kid->id,
        'name' => 'Updated Name',
        'surname' => 'Updated Surname',
        'age' => 12,
        'gender' => 'Updated',
        'atitude' => 'Updated Atitude',
        'country' => 'Updated Country',
    ]);
}
}
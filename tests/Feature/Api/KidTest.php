<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Kid;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class KidTest extends TestCase
{
    use RefreshDatabase;
    public function test_CheckIfReceiveAllEntryOfToyInJsonFile()
    {
        $kids = Kid::factory(1)->create();

        $response = $this->get(route('apiindexsanta'));

        $response->assertStatus(200)
        ->assertJsonCount(1);
        ;
    }
    
    public function test_CheckIfReceiveOnlyOneEntryOfToyInJsonFile()
{
    
    $kid = Kid::factory()->create();

    
    $response = $this->get(route('apishowsanta', ['id' => $kid->id]));

    
    $response->assertStatus(200);

    
    $response->assertJson([
        'id' => $kid->id,
    ]);

}


public function test_CheckIfCanCreateEntryInToyWithJson()
{

    $response = $this->post(route('apistoresanta'), [
        'name' => 'issam',
        'surname' => 'chellaf',
        'foto' => UploadedFile::fake()->create('photo.png', 50, 'image/png'),
        'age' => '10',
        'gender' => 'boy',
        'atitude' => 'good',
        'country' => 'spain',
        
    ]);
    $response->assertStatus(201);
    $response = $this->get(route('apiindexsanta'));
    $response->assertStatus(200)
    ->assertJsonCount(1); 
}

public function test_CheckIfCanDeleteEntryInToyWithApi()
{
    $kid = Kid::factory(2)->create();

    $response = $this->delete(route('apidestroysanta', 1));
    $this->assertDatabaseCount('kids', 1);

    $response = $this->get(route('apiindexsanta'));
    $response->assertJsonCount(1);
}

public function test_CheckIfCanUpdateEntryInToyWithJsonFile()
{

    $response = $this->post(route('apistoresanta'), [
        'name' => 'issam',
        'surname' => 'chellaf',
        'foto' => UploadedFile::fake()->create('photo.png', 50, 'image/png'),
        'age' => '10',
        'gender' => 'boy',
        'atitude' => 'good',
        'country' => 'spain',
    ]);
    $response->assertStatus(201);
    $data = ['name' => 'issam'];
    $response = $this->get(route('apiindexsanta'));
    $response->assertStatus(200)
    ->assertJsonCount(1)
    ->assertJsonFragment($data);

    $response = $this->put(route('apiupdatesanta', 1), [
        'name' => 'rene',
        'surname' => 'rene',
        'foto' => UploadedFile::fake()->create('photo.png', 50, 'image/png'),
        'age' => '9',
        'gender' => 'girl',
        'atitude' => 'good',
        'country' => 'spain',
    ]);
    $data = ['name' => 'rene'];
    $response = $this->get(route('apiindexsanta'));
    $response->assertStatus(200)
    ->assertJsonCount(1)
    ->assertJsonFragment($data);
}

   

}

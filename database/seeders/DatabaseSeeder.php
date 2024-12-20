<?php

namespace Database\Seeders;

use App\Models\Toy;
use App\Models\User;
use App\Models\MinimumAge;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\ToySeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\MinimumAgeSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MinimumAgeSeeder::class,
            ToySeeder::class
        ]);
        
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }

}
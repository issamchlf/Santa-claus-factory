<?php

namespace Database\Seeders;

use App\Models\MinimumAge;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MinimumAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ages = [
                [
                    'age' => "0"
                ],
                [
                    'age' => "+7"
                ],
                [
                    'age' => "+12"
                ]
                ];

        foreach ($ages as $age) {
            MinimumAge::create($age);
        }
    }
}

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
        $ageRanges = [
            ['min_age' => 0, 'max_age' => 3],
            ['min_age' => 3, 'max_age' => 7],
            ['min_age' => 7, 'max_age' => 12],
            ['min_age' => 12, 'max_age' => 16],
            ['min_age' => 16, 'max_age' => 18],
            ['min_age' => 18, 'max_age' => 99], 
        ];

        foreach ($ageRanges as $range) {
            MinimumAge::create($range);
        }
    }
}

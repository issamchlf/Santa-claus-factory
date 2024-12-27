<?php

namespace Database\Seeders;

use App\Models\Kid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kids = [
            // Toys for ages 0 and up
            [
                'name' => "jonathan",
                'surname' => "jonny",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 12 ,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "spain",

            ]];
            foreach ($kids as $kid) {
                Kid::create($kid);
            }
    }
}

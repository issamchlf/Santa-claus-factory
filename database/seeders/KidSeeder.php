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
                'name' => "Jonathan",
                'surname' => "Torreblanca",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 12 ,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "spain",

            ],

            [
                'name' => "Jose",
                'surname' => "Ortega",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 15 ,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "Morocco",
            ],

            [
                'name' => "Maria",
                'surname' => "Perez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 10,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "United States",
            ],
            
            [
                'name' => "Ana",
                'surname' => "Garcia",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 11,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "France",
            ],

            [
                'name' => "Juan",
                'surname' => "Gomez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 14,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "Mexico",
            ],

            [
                'name' => "Pedro",
                'surname' => "Gonzalez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 12,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "Japan",
            ],

            [
                'name' => "Luis",
                'surname' => "Rodriguez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 16,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "Brazil",
            ],

            [
                'name' => "Carlos",
                'surname' => "Fernandez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 9,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "India",
            ],

            [
                'name' => "Samuel",
                'surname' => "Hurtado",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 18,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "Canada",
            ],

            [
                'name' => "Montse",
                'surname' => "Vallejo",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 8,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "Germany",
            ],

            [
                'name' => "Sara",
                'surname' => "Garcia",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 25,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "Spain",
            ],
                
            [
                'name' => "Laura",
                'surname' => "Torreblanca",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 23,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "Morocco",
            ],

            [
                'name' => "Carmen",
                'surname' => "Gonzalez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 20,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "United States",
            ],

            [
                'name' => "Rosa",
                'surname' => "Rodriguez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 19,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "France",
            ],

            [
                'name' => "Elena",
                'surname' => "Fernandez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 27,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "Mexico",
            ],

            [
                'name' => "Isabel",
                'surname' => "Vazquez",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 26,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "Japan",
            ],

            [
                'name' => "Sofia",
                'surname' => "Vallejo",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 24,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "Brazil",
            ],

            [
                'name' => "Luis",
                'surname' => "Garcia",
                'foto' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                'age' => 22,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "India",
            ]];
            foreach ($kids as $kid) {

                Kid::create($kid);
            }
    }
}

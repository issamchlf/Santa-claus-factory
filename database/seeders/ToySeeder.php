<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toys = [
                // Toys for ages 0 and up
                [
                    'name' => "Rattle",
                    'description' => "Colorful rattle that stimulates the baby's senses.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Soft Plush",
                    'description' => "Soft plush toy with textures and contrasting colors.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/SoftPlush.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Crib Mobile",
                    'description' => "Musical mobile with rotating figures for the crib.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CribMobile.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Plastic Books",
                    'description' => "Books for safe handling and exploration.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/PlasticBooks.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Large Stackable Blocks",
                    'description' => "Soft blocks to encourage motor skills.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/LargeStackableBlocks.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Interactive Play Mats",
                    'description' => "Mats with lights, sounds, and varied textures.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/InteractivePlayMats.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Teething Toy",
                    'description' => "Soft and safe teething toy to soothe gums.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/TeethingToy.jpg",
                    'minimum_age_id' => 1
                ],

                // Toys for ages 7 and up
                [
                    'name' => "Advanced LEGO",
                    'description' => "LEGO set with challenging models.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/AdvancedLego.jpg",
                    'minimum_age_id' => 2
                ],
                [
                    'name' => "Educational Board Game",
                    'description' => "Monopoly Junior for learning through play.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/EducationalBoardGame.jpg",
                    'minimum_age_id' => 1
                ],
                [
                    'name' => "Experiment Kit",
                    'description' => "Kit for exploring science with fun experiments.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/ExperimentKit.jpg",
                    'minimum_age_id' => 2
                ],
                [
                    'name' => "100-300 Piece Puzzles",
                    'description' => "Puzzles that stimulate logic and concentration.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/Puzzles.jpg",
                    'minimum_age_id' => 3
                ],
                [
                    'name' => "Drawing and Craft Materials",
                    'description' => "Kits with watercolors, clay, and creative crafts.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CraftMaterials.jpg",
                    'minimum_age_id' => 2
                ],
                [
                    'name' => "Bicycle",
                    'description' => "Vehicle to develop balance and physical activity.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/Bicycle.jpg",
                    'minimum_age_id' => 5
                ],
                [
                    'name' => "Basic Tech Toys",
                    'description' => "Simple programmable robots or small drones.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/BasicTechToys.jpg",
                    'minimum_age_id' => 3
                ],

                // Toys for ages 12 and up
                [
                    'name' => "Camera Drone",
                    'description' => "Advanced drone with remote control and integrated camera.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CameraDrone.jpg",
                    'minimum_age_id' => 5
                ],
                [
                    'name' => "Strategy Game",
                    'description' => "Board game like Catan to develop strategic skills.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/StrategyGame.jpg",
                    'minimum_age_id' => 2
                ],
                [
                    'name' => "Robotics Kit",
                    'description' => "Arduino kit to learn robotics and programming.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/RoboticsKit.jpg",
                    'minimum_age_id' => 3
                ],
                [
                    'name' => "Video Games",
                    'description' => "Adventure or strategy titles suitable for teenagers.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/VideoGames.jpg",
                    'minimum_age_id' => 3
                ],
                [
                    'name' => "Basic Musical Instruments",
                    'description' => "Guitars, keyboards, or electric drums for beginners.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/BasicMusicalInstruments.jpg",
                    'minimum_age_id' => 4
                ],
                [
                    'name' => "Sports Games",
                    'description' => "Balls, rackets, or accessories for specific sports.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/SportsGames.jpg",
                    'minimum_age_id' => 5
                ],
                [
                    'name' => "Youth Books",
                    'description' => "Series like Harry Potter, Percy Jackson, or graphic novels.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/YouthBooks.jpg",
                    'minimum_age_id' => 5
                ],
                [
                    'name' => "Mineral Charcoal",
                    'description' => "Toy made by mineral coal for naughty Kids.",
                    'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735777056/image_4_dqgoki.webp",
                    'minimum_age_id' => 3
                ],
                [
                    'name' => "Vegetal Charcoal",
                    'description' => "Bear made by Vegetal coal for naughty Kids.",
                    'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735777057/image_3_ydjder.webp",
                    'minimum_age_id' => 3
                ],
                [
                    'name' => "Mystery Charcoal",
                    'description' => "toy made by coal for naughty Kids.",
                    'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735778083/69e824c0bd9c4ca6beafe2799fc213b2_lbxxc9.jpg",
                    'minimum_age_id' => 3
                ],
                [
                    'name' => "Travel to the Moon",
                    'description' => "Travel to the moon for +18 Kids.",
                    'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735854594/7a247dca9b3c49247353895c7176ab02_ckufod.jpg",
                    'minimum_age_id' => 6
                ],
                [
                    'name' => "Travel to Warner",
                    'description' => "Travel to warner park for +18 Kids.",
                    'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735854587/parque-warner_kpoank.jpg",
                    'minimum_age_id' => 6
                ],
                [
                    'name' => "Travel to Disneyland",
                    'description' => "Travel for disney land for +18 Kids.",
                    'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735854602/https___prod.static9_m90qhj.jpg",
                    'minimum_age_id' => 6
                ],

            ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}

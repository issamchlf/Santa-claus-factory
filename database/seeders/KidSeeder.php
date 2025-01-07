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
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242914/77421841xlarge_gwqybg.jpg",
                'age' => 12 ,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "spain",

            ],

            [
                'name' => "Anas",
                'surname' => "El Haddadi",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242914/IMG-20240319-WA0057_re2i4m.webp",
                'age' => 9 ,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "Morocco",
            ],

            [
                'name' => "Lara",
                'surname' => "Smith",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242915/SHP_5833_ka4y6y.webp",
                'age' => 6,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "United States",
            ],
            
            [
                'name' => "Ana",
                'surname' => "Garcia",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242913/156968_yrvg3x.jpg",
                'age' => 11,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "France",
            ],

            [
                'name' => "Juan",
                'surname' => "Gomez",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736243172/happy-mexican-kid-casual-clothing-against-neutral-background_731930-124530_jckwku.avif",
                'age' => 14,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "Mexico",
            ],

            [
                'name' => "Luan",
                'surname' => "Yamamoto",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242914/beautiful-asian-kid-posing_23-2151871599_dhhdg1.avif",
                'age' => 12,
                'gender' => "boy",
                'atitude' => "good",
                'country' => "Japan",
            ],

            [
                'name' => "Luis",
                'surname' => "Rodriguez",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242914/brazilian-boy-soccer-player-fan-600nw-1070962136_ypy1lv.webp",
                'age' => 12,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "Brazil",
            ],

            [
                'name' => "Aarav",
                'surname' => "Patel",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242915/ready-to-fight-boy-24411908_zieuyd.webp",
                'age' => 9,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "India",
            ],

            [
                'name' => "Samuel",
                'surname' => "Hurtado",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242914/little-boy-thumbs-up-smiling-showing-two-white-background-40221051_crkpul.webp",
                'age' => 16,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "Canada",
            ],

            [
                'name' => "Hans",
                'surname' => "Müller",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736243171/depositphotos_394572582-stock-photo-cheerful-child-holding-flag-germany_pmyzr2.webp",
                'age' => 8,
                'gender' => "boy",
                'atitude' => "bad",
                'country' => "Germany",
            ],

            [
                'name' => "Sara",
                'surname' => "Garcia",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242915/young-european-woman-holding-spanish-flag-cheerful-smiles-pointing-front_1187-31910_hrvjue.avif",
                'age' => 25,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "Spain",
            ],
                
            [
                'name' => "Laila",
                'surname' => "Bennani",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242913/3g2ZbuSIOrgdfLlHuWzO--_dnG_s2blw2.webp",
                'age' => 23,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "Morocco",
            ],

            [
                'name' => "Emily",
                'surname' => "Johnson",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736243520/girl-with-flag-that-says-usa-it_1277842-22751_zttsuk.jpg",
                'age' => 20,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "United States",
            ],

            [
                'name' => "Rosa",
                'surname' => "Surbame",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242913/360_F_661003792_QBbvysPJwNuZ0gSFTeTu0ov76KFbNMpP_bqzcxo.jpg",
                'age' => 19,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "France",
            ],

            [
                'name' => "Elena",
                'surname' => "Fernandez",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736243632/hispanic-latin-pretty-woman-feeling-260nw-2521257395_nwdmo0.webp",
                'age' => 27,
                'gender' => "girl",
                'atitude' => "bad",
                'country' => "Mexico",
            ],

            [
                'name' => "Yuki",
                'surname' => "Tanaka",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736242433/372567822_6445695008818378_4681250848846615703_n-827x1024_bjtqwx.jpg",
                'age' => 26,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "Japan",
            ],

            [
                'name' => "Sofia",
                'surname' => "Vallejo",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736243716/brazilian-girl-belm-par-brazil-JHE3R9_mnthxs.jpg",
                'age' => 17,
                'gender' => "girl",
                'atitude' => "good",
                'country' => "Brazil",
            ],

            [
                'name' => "Aisha",
                'surname' => "Khan",
                'foto' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1736243750/depositphotos_370545694-stock-photo-beautiful-indian-traditional-girl-posing_xdt5qt.webp",
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

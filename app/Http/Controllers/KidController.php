<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Toy;
use Illuminate\Http\Request;

class KidController extends Controller
{

    public function index()
    {
        $kids = Kid::with('toys')->get();
        return view('santa', compact('kids'));
    }

    // Assign toys to kids based on their age and behavior , made with solid method !
    public function assignToys()
    {
        $kids = Kid::all();

        foreach ($kids as $kid) {
            // this is for assign only toys if the kid doesn't have any toys
            if ($kid->toys->isEmpty()) {
                // If the kid is bad, assign a coal toy
                if ($kid->atitude === 'bad') {
                    $this->assignCoalToy($kid);
                } 
                // If the kid is good and between 18 and 99 years old, assign a travel gift
                elseif ($kid->age >= 18 && $kid->age <= 99) {
                    $this->assignSingleTravelGift($kid);
                } 
                // If the kid is good and under 18, assign two age-appropriate toys
                else {
                    $this->assignTwoAgeAppropriateToys($kid);
                }
            }
        }


        return redirect()->route('santa')->with('success', 'Toys have been assigned to all children!');
    }

    // this is for remove all assigned toy 
    public function removeAssignedToys()
    {
        $kids = Kid::all();

        foreach ($kids as $kid) {
            $kid->toys()->detach(); 
        }


        return redirect()->route('santa')->with('success', 'All assigned toys have been removed.');
    }


    public function show(string $id)
    {
        $kid = Kid::findOrFail($id); 
        return view('santaShow', compact('kid')); 
    }

    

    // Assign a coal toy to a bad kid
    private function assignCoalToy(Kid $kid)
    {
        // List of coal toys
        $coalToys = [
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
                'description' => "Toy made by coal for naughty Kids.",
                'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735778083/69e824c0bd9c4ca6beafe2799fc213b2_lbxxc9.jpg",
                'minimum_age_id' => 3
            ]
        ];

        // this is for select a random coal toy (important)
        $coalToy = $coalToys[array_rand($coalToys)];

        // this is for Find or create the coal toy in the database if not found (its take data from $coalToy that i assign before)
        $toy = Toy::firstOrCreate(
            ['name' => $coalToy['name']],
            [
                'description' => $coalToy['description'], // Data to insert if not found
                'image' => $coalToy['image'],
                'minimum_age_id' => $coalToy['minimum_age_id']
            ]
        );

        // this is for assign when create or find
        $kid->toys()->sync([$toy->id]);
    }

    // Assign a single travel gift to a good kid between 18 and 99 years old
    private function assignSingleTravelGift(Kid $kid)
    {
        
        $travelGifts = [
            [
                'name' => "Travel to the Moon",
                'description' => "Travel to the moon for +18 Kids.",
                'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735854594/7a247dca9b3c49247353895c7176ab02_ckufod.jpg",
                'minimum_age_id' => 3
            ],
            [
                'name' => "Travel to Warner",
                'description' => "Travel to warner park for +18 Kids.",
                'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735854587/parque-warner_kpoank.jpg",
                'minimum_age_id' => 3
            ],
            [
                'name' => "Travel to Disneyland",
                'description' => "Travel to Disneyland for +18 Kids.",
                'image' => "https://res.cloudinary.com/dkork1d8t/image/upload/v1735854602/https___prod.static9_m90qhj.jpg",
                'minimum_age_id' => 3
            ]
        ];

        // random travel gift
        $travelGift = $travelGifts[array_rand($travelGifts)];

        // Find or create the travel gift in the database (the same of other one)
        $toy = Toy::firstOrCreate(
            ['name' => $travelGift['name']], // Search criteria
            [
                'description' => $travelGift['description'], // Data to insert if not found
                'image' => $travelGift['image'],
                'minimum_age_id' => $travelGift['minimum_age_id']
            ]
        );


        $kid->toys()->sync([$toy->id]);
    }

    // Assign two toys that match ages to a good kid under 18
    private function assignTwoAgeAppropriateToys(Kid $kid)
    {
        // Query toys that match the kid's age range
        $toys = Toy::whereHas('minimumAge', function ($query) use ($kid) {
            $query->where('min_age', '<=', $kid->age) 
                ->where('max_age', '>=', $kid->age); 
        })
        ->where('name', 'not like', '%coal%') // this is for exclude coal gifts
        ->inRandomOrder()
        ->limit(2) // Select two random toys
        ->get();

        // Assign the toys if at least two are available
        if ($toys->count() === 2) {
            $kid->toys()->sync($toys->pluck('id')->toArray());
        }
    }
}

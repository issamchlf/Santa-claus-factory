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

   
    public function assignToys()
    {
        $kids = Kid::all();
    
        foreach ($kids as $kid) {
            // Check if the child has already been assigned a toy
            if ($kid->toys->isEmpty()) {
                // If the child's behavior is good
                if ($kid->atitude === 'good') {
                    // Find two toys that are appropriate for the kid age
                    $toys = Toy::whereHas('minimumAge', function ($query) use ($kid) {
                        // Ensure the toy's age range matches the child's age
                        $query->where('min_age', '<=', $kid->age)  // Toy's minimum age should be less than or equal to the kid age
                            ->where('max_age', '>=', $kid->age); // Toy's maximum age should be greater than or equal to the kid age
                    })
                    ->where('name', 'not like', '%coal%')  // Exclude toys that have "coal" in their name
                    ->inRandomOrder()
                    ->limit(2) // Select two random toys
                    ->get(); // Fetch the toys
    
                    // this is for check if the toys are avaible to assign 
                    if ($toys->count() === 2) {
                        $kid->toys()->sync($toys->pluck('id')->toArray()); // Assign the toys to the child
                    }
                } else {
                    // If the kid behavior is bad, assign one coal toy
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
    
                    // Choose a random coal toy
                    $coalToy = $coalToys[array_rand($coalToys)];
    
                    // Check if the coal toy is available in the database
                    $coalToyRecord = Toy::create([
                        'name' => $coalToy['name'],
                        'description' => $coalToy['description'],
                        'image' => $coalToy['image'],
                        'minimum_age_id' => $coalToy['minimum_age_id']
                    ]);
    
                    // Assign the coal toy to the kid
                    if ($coalToyRecord) {
                        $kid->toys()->sync([$coalToyRecord->id]); 
                    }
                }
            }
        }
    

        return redirect()->route('santa')->with('success', 'Toys have been assigned to all children!');
    }
    
    

    
    
    

    // this is for remove all the assigned toys
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
        $kids = Kid::findOrFail($id);
        return view('santaShow', compact('kids'));
    }
}

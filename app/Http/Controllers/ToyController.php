<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\MinimumAge;
use Illuminate\Http\Request;

class ToyController extends Controller
{


    public function index()
{
    $toys = Toy::with('minimumAge')->get(); 
    $ageRanges = MinimumAge::all(); 

    return view('elves', compact('toys', 'ageRanges'));
}

    //this is for assign age range by option button
    public function assignAgeRange(Request $request, Toy $toy)
    {
        $request->validate([
            'age_range_id' => 'required|exists:minimum_age,id',
        ]);

        // Assign the age range
        $toy->minimum_age_id = $request->input('age_range_id');
        $toy->save();

        return redirect()->back()->with('success', 'Age range assigned successfully.');
    }

     public function show(string $id)
    {
        $toys = Toy::findOrFail($id);
        return view('elveShow', compact('toys'));
    } 

}

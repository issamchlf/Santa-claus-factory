<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Toy;
use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch kids along with their toys
        $kids = Kid::with('toys')->get(); 
        return view('santa', compact('kids'));
    }

    /**
     * Assign toys to kids based on their behavior and age
     */
    public function assignToys()
    {
        $kids = Kid::all();

        foreach ($kids as $kid) {
            if ($kid->atitude) {
                // Assign 1 random toys suitable for the kid's age if their behavior is good
                $toys = Toy::where('minimum_age_id', '<=', $kid->age)->inRandomOrder()->take(1)->get();
                $kid->toys()->sync($toys->pluck('id'));
            } else {
                // Assign a coal toy if their behavior is bad
                $coal = Toy::where('name', 'like', '%coal%')->first();

                if ($coal) {
                    $kid->toys()->sync([$coal->id]);
                }
            }
        }

        return redirect()->route('santa')->with('success', 'Toys have been assigned to all kids!');
    }
    public function removeAssignedToys()
{
    $kids = Kid::all();

    foreach ($kids as $kid) {
        // Detach all toys assigned to this kid
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

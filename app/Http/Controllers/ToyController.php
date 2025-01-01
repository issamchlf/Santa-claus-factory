<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\MinimumAge;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $toys = Toy::with('minimumAge')->get(); // Eager load the assigned age range
    $ageRanges = MinimumAge::all(); // Fetch all available age ranges

    return view('elves', compact('toys', 'ageRanges'));
}

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



    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
   /* public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     */
     public function show(string $id)
    {
        $toys = Toy::findOrFail($id);
        return view('elveShow', compact('toys'));
    } 

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(string $id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, string $id)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
    /* public function destroy(string $id)
    {
        //
    } */
}

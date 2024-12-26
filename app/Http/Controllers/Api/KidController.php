<?php

namespace App\Http\Controllers\Api;

use App\Models\Kid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kids = Kid::all();
        return response()->json($kids, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'surname' => 'string',
            'photo' => 'string',
            'age' => 'integer',
            'gender' => 'string',
            'atitude' => 'string'
        ]);
        
        $kids = Kid::create([
            'name' => $validated['name'],
            'surname' =>  $validated['surname'],
            'photo' =>  $validated['photo'],
            'age' =>  $validated['age'],
            'gender' =>  $validated['gender'],
            'atitude' =>  $validated['atitude'],
        ]);
        $kids->save();
        return response()->json($kids, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

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
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'surname' => 'required|string',
        'foto' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:2048',
        'age' => 'required|integer',
        'gender' => 'required|string',
        'atitude' => 'required|string',
        'country' => 'required|string',
    ]);

    if ($request->hasFile('foto')) {
        // Store the file and get its URL
        $path = $request->file('foto')->store('uploads', 'public');
        $validated['foto'] = url("storage/{$path}");
    }

    $kids = Kid::create($validated);

    return response()->json($kids, 201); // Return created resource with 201 status code
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $kids = Kid::find($id);
        return response()->json($kids, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kids = Kid::find($id);
    
        if (!$kids) {
            return response()->json(['error' => 'Kid not found'], 404);
        }
    
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'surname' => 'sometimes|string',
            'foto' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:2048',
            'age' => 'sometimes|integer',
            'gender' => 'sometimes|string',
            'atitude' => 'sometimes|string',
            'country' => 'sometimes|string'
        ]);
    
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('uploads', 'public');
        }
    
        $kids->update(array_filter($validated));
        
    
        return response()->json($kids, 200);
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kids = Kid::find($id);
        $kids->delete();
    }
}

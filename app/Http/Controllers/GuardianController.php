<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guardian;

class GuardianController extends Controller
{
    public function show()
    {
        $guardian = Guardian::first();
        return response()->json($guardian, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'phone_number' => 'string'
        ]);
        $parent = Guardian::create($validatedData);
        return response()->json($parent, 201);
    }

    public function update(Request $request)
    {
        $guardian = Guardian::first();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'phone_number' => 'string'
        ]);

        $guardian->update($validatedData);
        return response()->json($guardian);
    }
}

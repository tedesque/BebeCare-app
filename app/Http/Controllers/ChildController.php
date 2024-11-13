<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    public function show()
    {
        $child = Child::first();
        return response()->json($child);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
        ]);

        $child = Child::create($validatedData);
        return response()->json($child, 201);
    }

    public function update(Request $request)
    {
        $child = Child::first();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
        ]);

        $child->update($validatedData);
        return response()->json($child);
    }
}

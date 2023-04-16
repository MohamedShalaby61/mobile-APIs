<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSubcategoryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);

        $user = $request->user();
        $user->subcategories()->syncWithoutDetaching($validatedData['subcategory_id']);

        return response(['message' => 'Subcategory added to user successfully']);
    }
}

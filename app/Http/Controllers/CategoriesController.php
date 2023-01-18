<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriesResource;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{

    public function index()
    {
        //get
        $categories = Categories::get();
        return response()->json(['data' => $categories]);
    }

    public function store(Request $request, Categories $categories)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $categories = Categories::create([
            'name' => $request->name,
        ]);

        return response()->json(['data' => $categories]);
    
    }

    public function show(Categories $categories)
    {
        return response()->json([
            'data'=> $categories
        ]);
        // return new CategoriesResource(true, 'Data categories found', $categories);
    }

    public function edit(Categories $categories)
    {
        //
    }

    public function update(Request $request, Categories $categories)
    {
        $categories->name = $request->name;
        $categories->save();

        return response()->json([
            'data' => $categories
        ]);
        // return new CategoriesResource(true, 'Update data categories success', $categories);
    }

    public function destroy(Categories $categories)
    {
        $categories->delete();
        return response()->json([
            'message' => 'Delete data categories success!'
        ], 204);
        // return new CategoriesResource(true, 'Delete data categories success', $categories);
    }
}

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

    public function show(Categories $category)
    {
        return response()->json([
            'data'=> $category
        ]);
        
    }

    public function update(Request $request, Categories $category)
    {
        $category->name = $request->name;
        $category->save();

        return response()->json([
            'data' => $category
        ]);
        
    }

    public function destroy(Categories $category)
    {
        $category->delete();
        return response()->json([
            'message' => 'Delete data categories success!'
        ], 204);
       
    }
}

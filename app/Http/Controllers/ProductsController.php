<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\ProductsResource;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;


class ProductsController extends Controller
{
    
    public function index()
    {
        //get
        $products =  Products::get();
        return response()->json(['data' => $products]);

    }

    public function store(Request $request, Products $products)
    {
        $request->validate([
            'categories_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);

        $products = Products::create([
            'categories_id' => $request->categories_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->price,
        ]);
        return response()->json(['data' => $products]);
        
    }

    public function show(Products $products)
    {
        return response()->json(['data' => $products]);
    }

    public function update(Request $request, Products $products)
    {

        $products->categories_id = $request->categories_id;
        $products->name = $request->name;
        $products->slug = $request->slug;
        $products->price = $request->price;
        $products->save();
        

        return response()->json(['data' => $products]);
    }

    public function destroy(Products $products)
    {
        $products->delete();
        return response()->json([
            'data' => $products,
            'message' =>'dihapus'
        ]);
    }
}

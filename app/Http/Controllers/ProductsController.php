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
            'name_products' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);

        $products = Products::create([
            'categories_id' => $request->categories_id,
            'name_products' => $request->name_products,
            'slug' => $request->slug,
            'price' => $request->price,
        ]);
        return response()->json(['data' => $products]);
        
    }

    public function show(Products $product)
    {
        return response()->json(['data' => $product]);
    }

    public function update(Request $request, Products $product)
    {

        $product->categories_id = $request->categories_id;
        $product->name_products = $request->name_products;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->save();
        

        return response()->json(['data' => $product]);
    }

    public function destroy(Products $product)
    {
        $product->delete();
        return response()->json([
            'data' => $product,
            'message' =>'dihapus'
        ]);
    }
}

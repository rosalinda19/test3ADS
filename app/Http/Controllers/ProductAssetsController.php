<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_assets;
use App\Http\Resources\AssetsResource;
use App\Http\Requests\StoreProduct_assetsRequest;
use App\Http\Requests\UpdateProduct_assetsRequest;

class ProductAssetsController extends Controller
{
    public function index()
    {
        //get 
        $product_assets = Product_assets::get();
        return response()->json(['data' => $product_assets]);
    }

    public function store(Request $request, Product_assets $product_assets)
    {
        $request->validate([
            'product_id' => 'required',
            'image' => 'required',
        ]);

        $product_assets = Product_assets::create([
            'product_id'=>$request->product_id,
            'image'=>$request->image,
        ]);

        return response()->json(['data' => $product_assets]);
    }

    public function show(Product_assets $product_assets)
    {
        return response()->json(['data' => $product_assets]);
    }

    public function update(Request $request, Product_assets $product_assets)
    {
        $request->validate([
            'product_id' => 'required',
            'image' => 'required',
        ]);

        $product_assets->update(
            $request->all()
        );
        return response()->json(['data' => $product_assets]);
    }

    public function destroy(Product_assets $product_assets)
    {
        return response()->json(['data' => $product_assets]);
    }
}

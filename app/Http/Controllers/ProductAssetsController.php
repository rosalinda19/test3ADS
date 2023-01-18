<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAssets;


class ProductAssetsController extends Controller
{
    public function index()
    {
        //get 
        $product_assets = ProductAssets::get();
        return response()->json(['data' => $product_assets]);
        
    }

    public function store(Request $request, ProductAssets $product_assets)
    {
        $request->validate([
            'product_id' => 'required',
            'image' => 'required',
        ]);

        $product_assets = ProductAssets::create([
            'product_id'=>$request->product_id,
            'image'=>$request->image,
        ]);

        return response()->json(['data' => $product_assets]);
    }

    public function show(ProductAssets $product_asset)
    {
        return response()->json(['data' => $product_asset]);
    }

    public function update(Request $request, ProductAssets $product_asset)
    {
        
        $product_asset->product_id = $request->product_asset;
        $product_asset->image = $request->product_asset;
        $product_asset->save();
        
        return response()->json(['data' => $product_asset]);
    }

    public function destroy(ProductAssets $product_asset)
    {
        $product_asset->delete();
        return response()->json([
            'data' => $product_asset,
            'message' =>'dihapus'
        ]);
        // return response()->json(['data' => $product_assets]);
    }
}

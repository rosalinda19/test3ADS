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
        return new AssetsResource(true, 'List Asset', $product_assets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct_assetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product_assets $product_assets)
    {
        $request->validate([
            'products_id' => 'required',
            'image' => 'required',
        ]);

        $product_assets->create([
            'products_id'=>$request->products_id,
            'image'=>$request->image,
        ]);

        return new AssetsResource(true, 'Create data asset success', $product_assets);
    }

    public function show(Product_assets $product_assets)
    {
        return new AssetsResource(true, 'Data asset found', $product_assets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_assets  $product_assets
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_assets $product_assets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_assetsRequest  $request
     * @param  \App\Models\Product_assets  $product_assets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_assets $product_assets)
    {
        $request->validate([
            'products_id' => 'required',
            'image' => 'required',
        ]);

        $product_assets->update(
            $request->all()
        );
        return new AssetsResource(true, 'Update data asset success', $product_assets);
    }

    public function destroy(Product_assets $product_assets)
    {
        return new AssetsResource(true, 'Delete data asset success', $product_assets);
    }
}

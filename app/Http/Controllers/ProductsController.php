<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\ProductsResource;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Resources\CategoriesResource;
use App\Models\Categories;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get
        $products =  Products::get();

        return new ProductsResource(true, 'List Products', $products);
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
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Products $products)
    {
        $request->validate([
            'categories_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);

        $products->create([
            'categories_id' => $request->categories,
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->price,
        ]);
        return new ProductsResource(true, 'Create data product success', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return new ProductsResource(true, 'Data product found', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        $request->validate([
            'categories_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);

        $products->update(
            $request->all()
        );

        return new ProductsResource(true, 'Update data product success', $products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $products->delete();
        return new ProductsResource(true, 'Delate data product success', $products);
    }
}

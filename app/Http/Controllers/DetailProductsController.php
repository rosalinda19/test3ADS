<?php

namespace App\Http\Controllers;

use App\Models\detailProducts;
use App\Http\Requests\StoredetailProductsRequest;
use App\Http\Requests\UpdatedetailProductsRequest;

class DetailProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoredetailProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredetailProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detailProducts  $detailProducts
     * @return \Illuminate\Http\Response
     */
    public function show(detailProducts $detailProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailProducts  $detailProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(detailProducts $detailProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedetailProductsRequest  $request
     * @param  \App\Models\detailProducts  $detailProducts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedetailProductsRequest $request, detailProducts $detailProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailProducts  $detailProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailProducts $detailProducts)
    {
        //
    }
}

<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductAssetsController;
use App\Http\Controllers\ProductsController;
use App\Models\ProductAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/categories', CategoriesController::class);
Route::apiResource('/products', ProductsController::class);
Route::apiResource('/product_assets', ProductAssetsController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

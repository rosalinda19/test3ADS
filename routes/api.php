<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Models\Product_assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/categories', CategoriesController::class);
Route::apiResource('/products', ProductsController::class);
Route::apiResource('/product_assets', Product_assets::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(
//     [
//         'middleware' => 'api',
//         'prefix' => 'categories',
//     ],
//     function ($router) {
//         Route::get("/", [BeaconController::class, 'index']);
//         Route::post("/create", [BeaconController::class, 'store']);
//         Route::post("/validate-schedule", [
//             BeaconController::class,
//             'searchClassAndSchedule',
//         ])->middleware('auth');
//     }
// );
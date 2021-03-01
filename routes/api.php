<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StreetController;
use Illuminate\Support\Facades\Route;

Route::apiResource('regions', RegionController::class)
    ->only(['index', 'show']);

Route::get('regions/{uuid}/cities', [CityController::class, 'index']);
Route::get('cities/{uuid}', [CityController::class, 'show']);

Route::get('cities/{uuid}/streets', [StreetController::class, 'index']);
Route::get('streets/{uuid}', [StreetController::class, 'show']);

Route::get('streets/{uuid}/houses', [HouseController::class, 'index']);
Route::get('houses/{uuid}', [HouseController::class, 'show']);

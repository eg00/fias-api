<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StreetController;
use Illuminate\Support\Facades\Route;

Route::get('regions', [RegionController::class, 'index']);
Route::get('regions/{uuid}', [RegionController::class, 'show']);

Route::get('regions/{uuid}/areas', [AreaController::class, 'index']);
Route::get('areas/{uuid}', [AreaController::class, 'show']);

Route::get('regions/{uuid}/cities', [CityController::class, 'indexByRegion']);
Route::get('areas/{uuid}/cities', [CityController::class, 'indexByArea']);
Route::get('cities/{uuid}', [CityController::class, 'show']);

Route::get('cities/{uuid}/streets', [StreetController::class, 'index']);
Route::get('streets/{uuid}', [StreetController::class, 'show']);

Route::get('streets/{uuid}/houses', [HouseController::class, 'index']);
Route::get('houses/{uuid}', [HouseController::class, 'show']);
Route::post('houses', [HouseController::class, 'batch']);

Route::get('houses/{uuid}/flats', FlatController::class);

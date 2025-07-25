<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\WarshipApiController;
use App\Models\Address;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login',[ApiController::class,'login']);
Route::post('/register',[ApiController::class,'register']);
Route::apiResource('user',ApiController::class)->middleware('auth:sanctum');
Route::apiResource('warship',WarshipApiController::class)->middleware('auth:sanctum');
Route::apiResource('address',AddressController::class);



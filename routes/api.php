<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 

Route::get('/suma/{numero1}/{numero2}', [APIController::class, 'suma']);
Route::get('/multiplicar/{numero1}/{numero2}', [APIController::class, 'multiplicar']);
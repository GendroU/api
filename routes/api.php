<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MercedesController;

Route::get('/mercedes', [MercedesController::class, 'index']);
Route::post('/mercedes', [MercedesController::class, 'store']);
Route::get('/mercedes/{mercedes}', [MercedesController::class, 'show']);
Route::put('/mercedes/{mercedes}', [MercedesController::class, 'update']);
Route::delete('/mercedes/{mercedes}', [MercedesController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

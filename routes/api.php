<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Assuming that AnimeController is in the App\Http\Controllers namespace
Route::get('/anime/get-row/{id}', [AnimeController::class, 'getRowById'])->name('anime.getRow');
Route::get('/anime/v1/hello', [AnimeController::class, 'hi'])->name('anime.hi');

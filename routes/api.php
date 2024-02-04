<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/license',             [App\Http\Controllers\Api\LicenseValidation::class, 'post']);
Route::post('/digiflazz',             [App\Http\Controllers\Api\DigiflazzController::class, 'store']);
Route::post('/order',             [App\Http\Controllers\Api\OrderController::class, 'store']);
Route::post('/status',             [App\Http\Controllers\Api\StatusController::class, 'show']);
Route::post('/service',             [App\Http\Controllers\Api\DigiflazzController::class, 'show']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

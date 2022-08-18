<?php

use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\IpAddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'authenticate']);

Route::middleware(['auth:sanctum'])->group(function() {
    Route::apiResource('ip', IpAddressController::class)->only('store', 'update');;
    Route::apiResource('log', AuditTrailController::class)->only('index');
});
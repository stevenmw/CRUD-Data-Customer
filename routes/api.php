<?php

use App\Http\Controllers\API\CustomerController;
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

Route::get('customer', [CustomerController::class, 'index']);
Route::post('customer/store', [CustomerController::class, 'store']);
Route::get('customer/show/{id}', [CustomerController::class, 'show']);
Route::post('customer/update/{id}', [CustomerController::class, 'update']);
Route::get('customer/destroy/{id}', [CustomerController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

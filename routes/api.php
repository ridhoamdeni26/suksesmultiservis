<?php

use App\Http\Controllers\Api\OutletController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ContactusController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function() {
//     // manggil controller sesuai bawaan laravel 8
//     Route::post('logout', [AuthController::class, 'logout']);
// });

// ROUTE FOR LOGIN
Route::post('login', [AuthController::class, 'login']);

// Route For Contact Us Controller
Route::post('contactus', [ContactusController::class, 'create']);
Route::get('data-outlet', [OutletController::class, 'getData']);
Route::post('outlets-creates', [OutletController::class, 'storeData']);

Route::middleware('auth:sanctum')->group(function() {
    Route::post('logout', [AuthController::class, 'logout']);
    
});

Route::group(['as' => 'api.', 'namespace' => 'Api'], function () {
    Route::get('outlets', [OutletController::class, 'index'])->name('outlets.index');
});



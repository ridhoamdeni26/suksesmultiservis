<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthuserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Admin\OutletController;
use App\Http\Controllers\Admin\OutletMapController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PartnersmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// ADMIN SECTION

// Auth Admin
Route::get('login-admin', [AuthuserController::class, 'index']);
Route::post('login-admin', [AuthuserController::class, 'login'])->name('login.admin');


Route::middleware('auth:sanctum')->group(function() {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.all');
    Route::get('our_outlets', [OutletMapController::class, 'index'])->name('outlet_map.index');


    Route::resource('outlets', OutletController::class);
    Route::get('data-outlet', [OutletController::class, 'outletData']);
    Route::post('data-outlet', [OutletController::class, 'outletData']);
});

// Route Home Controllers
Route::get('/', [HomeController::class, 'index']);

// Route About us Controllers
Route::get('/about-us', [AboutusController::class, 'index']);

// Route Partner SMS Controllers
Route::get('/partner-us', [PartnersmsController::class, 'index']);

// Route Contact us Controllers
Route::get('/contact-us', [ContactusController::class, 'index']);



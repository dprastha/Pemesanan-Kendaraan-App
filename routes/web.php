<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderPenyetujuController;

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


Auth::routes();

Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
// Route::get('/penyetuju', [HomeController::class, 'index'])->name('admin.home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('vehicle', VehicleController::class)->middleware('is_admin');
Route::resource('driver', DriverController::class)->middleware('is_admin');
Route::resource('order', OrderController::class)->middleware('is_admin');
Route::resource('orderpenyetuju', OrderPenyetujuController::class);

<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PilotController;
use Illuminate\Support\Facades\Route;

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



Route::resource('Flight', FlightController::class);
Route::resource('Pilot', controller: PilotController::class);
// Route::get('/Flight/{id}', [FlightController::class,'show'])->where('id','\d+')  ->name('post.show');

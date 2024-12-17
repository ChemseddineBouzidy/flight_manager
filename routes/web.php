<?php

use App\Http\Controllers\FlightController;
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


// create une flight
Route::get('/post/create', [FlightController::class, 'create'])->name('post.create');
Route::post('/post/store', [FlightController::class, 'store'])->name('post.store');

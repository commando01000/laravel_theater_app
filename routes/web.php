<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\showsController;
use App\Models\event_registeration;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/event_registeration", eventController::class);

// Route::resource("/admin", adminController::class);

Route::resource("/admin", showsController::class);
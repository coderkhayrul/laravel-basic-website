<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

//<- ------- HOME ROUTE --------- ->
Route::resource('/', HomeController::class);

//<- ------- ABOUT ROUTE --------- ->
Route::resource('/about', AboutController::class);

//<- ------- CONTACT ROUTE --------- ->
Route::resource('/contact', ContactController::class);

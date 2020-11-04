<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('plantilla', 'Minecraft@plantilla');

Route::get('picasso', 'Minecraft@picasso');
Route::get('monet', 'Minecraft@monet');
Route::get('dali', 'Minecraft@dali');
Route::get('van', 'Minecraft@van');
Route::get('vinci', 'Minecraft@vinci');

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
Route::get('/services', function () {
    return view('pages.service');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/pricing', function () {
    return view('pages.pricing');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
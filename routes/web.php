<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Container\CircularDependencyException;

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

Route::get('/', '\App\Http\Controllers\HomepageController@index');
Route::get('/about', '\App\Http\Controllers\HomepageController@about');
Route::get('/kontak', '\App\Http\Controllers\HomepageController@kontak');
Route::get('/aksesoris', '\App\Http\Controllers\HomepageController@aksesoris');
Route::get('/makanan', '\App\Http\Controllers\HomepageController@makanan');
Route::get('/vitamin', '\App\Http\Controllers\HomepageController@vitamin');


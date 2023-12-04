<?php

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
Route::get('/index','App\http\Controllers\IndexController@index');
Route::get('/blog','App\http\Controllers\BlogController@blog');
Route::get('/about','App\http\Controllers\AboutController@about');
Route::get('/contect','App\http\Controllers\ContectController@contect');
Route::get('/job','App\http\Controllers\JObController@job');
Route::get('/service','App\http\Controllers\ServiceController@service');
Route::get('/career','App\http\Controllers\CareerController@career');

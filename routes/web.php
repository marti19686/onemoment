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

Route::prefix('portfolio')->group(function () {
    Route::get('/', 'PortfolioController@index');
    Route::get('/cv/download/', "PortfolioController@download")->name('downloadCV');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

// Login
Route::get('/', 'Authcontroller@index')->name('login');
Route::post('/postlogin', 'Authcontroller@postlogin');
Route::get('/logout', 'Authcontroller@logout');

// Dashboard
Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
	Route::get('/dashboard', 'Dashboard@index');
});

// Kasir
Route::group(['middleware' => ['auth', 'checkRole:kasir']], function(){
	Route::get('/kasir', 'Kasir@index');
});
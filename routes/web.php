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
	// Supplier
	Route::get('/dashboard/supplier', 'Suppliercontroller@index');
	Route::post('/dashboard/supplier', 'Suppliercontroller@store');
	Route::patch('/dashboard/supplier/{suppliermodel}', 'Suppliercontroller@update');
	Route::get('/dashboard/supplier/{suppliermodel}', 'Suppliercontroller@destroy');
	// Customer
	Route::get('/dashboard/customer', 'Customercontroller@index');
	Route::post('dashboard/customer', 'Customercontroller@store');
	Route::patch('dashboard/customer/{customermodel}', 'Customercontroller@update');
	Route::get('dashboard/customer/{customermodel}', 'Customercontroller@destroy');
	// Kategori
	Route::get('/dashboard/kategori', 'Kategoricontroller@index');
	Route::post('/dashboard/kategori', 'Kategoricontroller@store');
	Route::patch('/dashboard/kategori/{kategorimodel}', 'Kategoricontroller@update');
	Route::get('/dashboard/kategori/{kategorimodel}', 'Kategoricontroller@destroy');
	// Unit
	Route::get('/dashboard/unit', 'Unitcontroller@index');
	// Item
	Route::get('/dashboard/item', 'Itemcontroller@index');
});

// Kasir
Route::group(['middleware' => ['auth', 'checkRole:kasir']], function(){
	Route::get('/kasir', 'Kasir@index');
});
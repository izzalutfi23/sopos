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
	Route::post('/dashboard/unit', 'Unitcontroller@store');
	Route::patch('/dashboard/unit/{unitmodel}', 'Unitcontroller@update');
	Route::get('/dashboard/unit/{unitmodel}', 'Unitcontroller@destroy');
	// Item
	Route::get('/dashboard/item', 'Itemcontroller@index');
	Route::post('/dashboard/item', 'Itemcontroller@store');
	Route::patch('/dashboard/item/{itemmodel}', 'Itemcontroller@update');
	Route::get('/dashboard/item/{itemmodel}', 'Itemcontroller@destroy');
	// Stock In
	Route::get('/dashboard/stockin', 'Stockincontroller@index');
	Route::post('/dashboard/stockin', 'Stockincontroller@store');
	Route::get('/dashboard/stockin/{stockinmodel}', 'Stockincontroller@destroy');
	// Stock Out
    Route::get('/dashboard/stockout', 'Stockoutcontroller@index');

    // Cabang Toko
    Route::get('/dashboard/cabangtoko', 'Cabangtokocontroller@index');
    Route::post('/dashboard/cabangtoko', 'Cabangtokocontroller@store');
    Route::patch('/dashboard/cabangtoko/{cabangtokomodel}', 'Cabangtokocontroller@update');
	Route::get('/dashboard/cabangtoko/{cabangtokomodel}', 'Cabangtokocontroller@destroy');

	// Penjualan
	Route::get('/dashboard/penjualan', 'Penjualancontroller@index');

	// Karyawan
	Route::get('/dashboard/karyawan', 'Karyawancontroller@index');
	Route::post('/dashboard/karyawan', 'Karyawancontroller@store');
	Route::patch('/dashboard/karyawan/{karyawanmodel}', 'Karyawancontroller@update');
	Route::get('/dashboard/karyawan/{karyawanmodel}', 'Karyawancontroller@destroy');
	Route::patch('/dashboard/karyawan/edituser/{user}', 'Karyawancontroller@edituser');
});

// Kasir
Route::group(['middleware' => ['auth', 'checkRole:kasir']], function(){
	Route::get('/kasir', 'Kasircontroller@index');
	Route::post('/kasir/addcart', 'Kasircontroller@addcart');
	Route::patch('/kasir/editcart/{cartmodel}', 'Kasircontroller@updatecart');
	Route::get('/kasir/delcart/{cartmodel}', 'Kasircontroller@delcart');
});
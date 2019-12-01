<?php

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

Auth::routes();
Route::get('/yo', function (){
    // dd(auth()->user());
    return auth()->user();
});

Route::post('/authenticate', 'UserController@authenticate');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('User', 'users');

Route::resource('Carrito', 'Carrito');

Route::resource('Cliente', 'Cliente');

Route::resource('Descuento', 'Descuento');

Route::resource('Producto', 'ProductController');

Route::resource('Tarjeta', 'Tarjeta');

Route::resource('Venta', 'Venta');

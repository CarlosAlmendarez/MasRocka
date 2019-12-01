<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/profile', function(){
    // return 'profile';
    // dd(auth()->resolve());
    return Auth::user();
});

Route::post('/login', 'UserController@authenticate');
// Route::post('/logout', 'UserController@logout');
// // Auth::routes();
// Route::resource('User', 'users');

// Route::resource('Carrito', 'Carrito');

// Route::resource('Cliente', 'Cliente');

// Route::resource('Descuento', 'Descuento');

// Route::resource('Producto', 'ProductController');

// Route::resource('Tarjeta', 'Tarjeta');

// Route::resource('Venta', 'Venta');

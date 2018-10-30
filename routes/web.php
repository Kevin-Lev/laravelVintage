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

Route::get('/testebootstrap', function () {
    return view('index2');
});

Route::resource('products','ProductController');
// Route::resource('photos', 'PhotoController');


// Route::resource('/tags/store', 'TagController');
Route::post('/tags/store/{name}', 'TagController@store');
Route::get('/tags/store/{name}', 'TagController@store');

// Route::get('/products/{product}/edit', 'TagController@update');


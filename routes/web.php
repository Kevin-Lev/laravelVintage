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

Route::get('/preview/{product_id}', 'ProductController@preview');
Route::post('/preview/{product_id}', 'ProductController@preview');

Route::get('/import', 'ProductController@uploadCsv');
Route::post('/import', 'ProductController@uploadCsv');

Route::resource('products','ProductController');


Route::post('/tags/store/{name}', 'TagController@store');
Route::get('/tags/store/{name}', 'TagController@store');

Route::post('/photoStore/{product_id}/{id}', 'PhotoController@destroy');
Route::get('/photoStore/{product_id}/{id}', 'PhotoController@destroy');

Route::post('/tagDelete/{id}', 'TagController@destroy');
Route::get('/tagDelete/{id}', 'TagController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send', 'MailController@send');



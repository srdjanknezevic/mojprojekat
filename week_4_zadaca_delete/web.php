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

Route::get('/users', 'UserWebController@index');
 Route::get('/register', 'UserWebController@register');
 Route::post('/register', 'UserWebController@store');
 Route::get('/edit/{id}', 'UserWebController@edit');
 Route::post('/update/{id}', 'UserWebController@update')->name('updateuser');
 Route::get('/delete/{id}', 'UserWebController@destroy');






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

Route::get('/contact', function () {
    return view('contact');
});

//Route::post('/welcome/submit', function () {
    //return view('welcome');
  //  return Request::all();
//})->name('create_paste'); //форма создание пасты

Route::post('/welcome/submit', 'PasteAddController@submit'
)->name('create_paste');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('rest', 'RestController@index')->name('restTest');  что-то не робит

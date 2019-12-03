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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend\test');
// });



Route::resource('/', 'AllviewsController');

Route::resource('information', 'InformationController');

Auth::routes();

Route::get('arifurashik', 'InformationController@index')->name('home');

Route::get('myfile/download{id}', 'AllviewsController@download')->name('myfile.download');
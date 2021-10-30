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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rejectedUser','HomeController@admin')->name('rejectedUser')->middleware('admin');

Route::get('/home/admin','HomeController@admin')->name('Admin')->middleware('admin');


Route::get('/home/admin/records','PDFmaker@PrintUsers')->name('PDFUsers')->middleware('admin');



Route::get('/approve/{id}','HomeController@approve')->name('approve');

Route::get('/reject/{id}','HomeController@reject')->name('reject');



Route::get('/deleteusers/{id}','HomeController@deleteUser')->name('deleteUser');
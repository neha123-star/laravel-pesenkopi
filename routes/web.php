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


Route::get('/', 'CoffeController@index');

Auth::routes();

//user
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'CoffeController@index')->name('index');
Route::get('/menu', 'CoffeController@menu')->name('menu');
Route::get('/about', 'CoffeController@about')->name('about');
Route::get('/contact', 'CoffeController@contact')->name('contact');



//admin

Route::get('adminhome', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::group(['middleware' => ['is_admin']], function () {
    Route::resource('admin/kopi/ice', 'KopiIceController');
    Route::get('admin/kopi/ice/delete/{id}','KopiIceController@destroy')->name('ice.delete');

    Route::resource('admin/tea', 'TeaController');
    Route::get('admin/tea/delete/{id}','TeaController@destroy')->name('tea.delete');

    Route::resource('admin/dalgona', 'DalgonaController');
    Route::get('admin/dalgona/delete/{id}','DalgonaController@destroy')->name('dalgona.delete');

    Route::resource('admin/choco', 'ChocoController');
    Route::get('admin/choco/delete/{id}','ChocoController@destroy')->name('choco.delete');

    Route::resource('admin/bottle', 'BottleController');
    Route::get('admin/bottle/delete/{id}','BottleController@destroy')->name('bottle.delete');
    
    //Snack
    Route::resource('admin/brownis', 'BrownisController');
    Route::get('admin/brownis/delete/{id}','BrownisController@destroy')->name('brownis.delete');


    
});
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

Route::get('/', 'FrontPageController@index');
Route::get('/show/{id}', 'FrontPageController@show');
Auth::routes();
Route::middleware(['auth'])->group(function () {
	Route::resource('/kategori','KategoriController');
	Route::resource('/user','UserController')->middleware('check-permission:admin|superadmin');	
	Route::resource('/artikel','ArtikelController');	
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/komentar','KomentarController@store');
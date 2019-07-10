<?php



Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('/','Auth\LoginController@mantenerSesion')->name('dashboard');
Route::get('dashboard', 'dashboardController@index')->name('vistas');

Route::get('/dashboardes', 'UserController@index')->name('users');

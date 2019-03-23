<?php


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@listPatient')->name('home');

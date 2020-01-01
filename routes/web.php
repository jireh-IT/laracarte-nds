<?php


Route::get('/', 'PagesController@home')->name('home');


Route::get('/about','PagesController@about' )->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact');

Route::post('/contact', 'ContactsController@store')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

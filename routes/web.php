<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontController@index')->name('home');
Route::get('nosotros', 'FrontController@aboutUs')->name('about-us');
Route::get('contacto', 'FrontController@contact')->name('contact');
Route::get('blog', 'FrontController@blog')->name('blog');
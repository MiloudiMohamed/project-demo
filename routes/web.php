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

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::get('/teams', 'TeamsController@index')->name('teams.index');
Route::get('/teams/{team}', 'TeamsController@show')->name('teams.show');

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');

Route::get('/workshops', 'WorkshopsController@index')->name('workshops.index');
Route::get('/workshops/create', 'WorkshopsController@create')->name('workshops.create');
Route::get('/workshops/{workshop}', 'WorkshopsController@show')->name('workshops.show');
Route::post('/workshops', 'WorkshopsController@store')->name('workshops.store');

Route::get('/lectures', 'LecturesController@index')->name('lectures.index');
Route::get('/lectures/create', 'LecturesController@create')->name('lectures.create');
Route::get('/lectures/{lecture}', 'LecturesController@show')->name('lectures.show');
Route::post('/lectures', 'LecturesController@store')->name('lectures.store');

Route::view('/teacher', 'teacher')->name('teacher');
Route::view('/about', 'about')->name('about');

Route::get('/admins', 'AdminsController@index')->name('admins.index');

Route::get('/admins/teachers', 'Admins\TeachersController@index')->name('admins.teachers.index');
Route::patch('/admins/teachers/{teacher}', 'Admins\TeachersController@update')->name('admins.teachers.update');
Route::delete('/admins/teachers/{teacher}', 'Admins\TeachersController@destroy')->name('admins.teachers.destroy');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

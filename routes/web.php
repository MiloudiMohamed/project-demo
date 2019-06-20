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

Route::get('test', function() {
	dd(auth()->user()->is_accepted);
});

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

Route::view('/about', 'about')->name('about');

Route::get('/teacher', 'TeachersController@index')->name('teachers.index');

Route::get('/admins', 'AdminsController@index')->name('admins.index');

Route::get('/admins/teachers', 'Admins\TeachersController@index')->name('admins.teachers.index');
Route::patch('/admins/teachers/{teacher}', 'Admins\TeachersController@update')->name('admins.teachers.update');
Route::delete('/admins/teachers/{teacher}', 'Admins\TeachersController@destroy')->name('admins.teachers.destroy');

Route::get('/admins/articles', 'Admins\ArticlesController@index')->name('admins.articles.index');
Route::patch('/admins/articles/{article}', 'Admins\ArticlesController@update')->name('admins.articles.update');
Route::delete('/admins/articles/{article}', 'Admins\ArticlesController@destroy')->name('admins.articles.destroy');

Route::get('/admins/workshops', 'Admins\WorkshopsController@index')->name('admins.workshops.index');
Route::patch('/admins/workshops/{workshop}', 'Admins\WorkshopsController@update')->name('admins.workshops.update');
Route::delete('/admins/workshops/{workshop}', 'Admins\WorkshopsController@destroy')->name('admins.workshops.destroy');

Route::get('/admins/lectures', 'Admins\LecturesController@index')->name('admins.lectures.index');
Route::patch('/admins/lectures/{lecture}', 'Admins\LecturesController@update')->name('admins.lectures.update');
Route::delete('/admins/lectures/{lecture}', 'Admins\LecturesController@destroy')->name('admins.lectures.destroy');

Route::get('/admins/teams', 'Admins\TeamsController@index')->name('admins.teams.index');
Route::get('/admins/teams/create', 'Admins\TeamsController@create')->name('admins.teams.create');
Route::post('/admins/teams', 'Admins\TeamsController@store')->name('admins.teams.store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

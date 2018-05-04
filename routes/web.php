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

Route::get('/', 'PostsController@index')->name('home');

Route::get('/post/{post}', 'PostsController@show');

Route::get('/user/{user}', 'UsersController@show');

Route::get('/user/{user}/posts', 'UsersController@showPosts');

Route::get('/user/{user}/comments', 'UsersController@showComments');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

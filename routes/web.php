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

Route::get('/', 'PostsController@index')->name('home');

Route::get('/post/{post}', 'PostsController@show');

Route::post('/post/{post}/comment', 'CommentsController@store');

Route::get('/user/{user}', 'UsersController@show');

Route::get('/user/{user}/posts', 'UsersController@showPosts');

Route::get('/user/{user}/comments', 'UsersController@showComments');

Auth::routes();
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/post/new', 'PostController@post');
Route::delete('/post/delete/', 'PostController@DeletePost');
Route::get('/post/likes/{id}', 'PostController@likes');
Route::post('/comment', 'CommentController@CommentOnPost');

// Route::get('/log', 'HomeController@log');
<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index');

Route::get('admin/posts', 'Admin\PostsController@index');
Route::get('admin/posts/create', 'Admin\PostsController@create');
Route::get('admin/posts/{post}/edit', 'Admin\PostsController@edit');

Route::post('admin/posts', 'Admin\PostsController@store')->name('posts.store');
//Route::post('admin/posts', 'Admin\PostsController@update')->name('posts.update');
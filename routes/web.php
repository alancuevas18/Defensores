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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//web
Route::get('/', 'Web\PageController@index')->name('home');
Route::get('noticia', 'Web\PageController@blog')->name('blog');
Route::get('noticia/{slug}', 'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('buscar', 'Web\PageController@search')->name('search');

//admin
Route::resource('/tags', 'Admin\TagController');
Route::resource('/categories', 'Admin\CategoryController');
Route::resource('/posts', 'Admin\PostController');
Route::resource('/advert', 'Admin\AdvertController');
Route::resource('/economies', 'Admin\EconomyController');


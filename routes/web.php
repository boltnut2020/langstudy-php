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

Auth::routes();

Route::group([
    'middleware' => 'auth.role',
    'prefix' => '',
    'role' => 'admin',
],function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('articles', 'ArticlesController');
    Route::resource('videos', 'VideosController');
    Route::resource('categories', 'CategoriesController');
});

Route::group([
    'middleware' => 'auth.role',
    'prefix' => '',
    'role' => 'writer',
],function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('articles', 'ArticlesController');
});

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', 'HomeController@index')->name('home');

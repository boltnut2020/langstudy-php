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


Route::group(['middleware' => ['role:admin|writer|guest']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware' => ['role:admin|writer']], function () {
    Route::resource('articles', 'ArticlesController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('memos', 'MemosController');
    Route::resource('tags', 'TagsController');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
});

Route::group(['middleware' => ['role:writer']], function () {
});

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', 'HomeController@index')->name('home');

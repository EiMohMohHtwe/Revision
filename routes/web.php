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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/articles/create' , 'ArticleController@create')->name('articles.create');
    Route::get('/index', 'ArticleController@index')->name('index');
    Route::get('/store', 'ArticleController@store')->name('article.store');
    Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

    Route::get('/comment', 'CommentController@index')->name('comment.index');
    Route::post('articles/{article}/comments', 'CommentController@store')->name('comments.store');

    Route::get('/userlist', 'UserController@index')->name('userlist.index');
    
    Route::post('/profile/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::patch('/profile/{user}','UserController@update')->name('profile.update');
    Route::post('/profile/{user}', 'UserController@show')->name('users.show');
    Route::get('/profile/{user}', 'UserController@show')->name('profile.show');
    Route::get('profile/{id}/showAvatar', 'UserController@showAvatar')->name('avatar.show');
    Route::delete('/profile/{user}', 'UserController@destroy')->name('profile.destroy');
});


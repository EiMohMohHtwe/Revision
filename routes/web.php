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

Route::get('/register/userlist', [
    'uses' => 'UserController@index',
    'as' => 'userlist',
    'middleware' => 'auth'
]);

Route::get('/create' , 'ArticleController@create')->name('articles.create');

Route::get('/index', [
    'uses' => 'ArticleController@index',
    'as' => 'index',
    'middleware' => 'auth'
]);

Route::post('/store', [
    'uses' => 'ArticleController@store',
    'as' => 'article.store',
    'middleware' => 'auth'
]);

Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('/comment', [
    'uses' => 'CommentController@index',
    'as' => 'comment',
    'middleware' => 'auth'
]);

Route::post('articles/{article}/comments', 'CommentController@store')->name('comments.store');

Route::get('/profile/edit/{user}', 'UserController@edit')->name('users.edit');
Route::patch('/profile/{user}','UserController@update')->name('profile.update');

Route::get('/userlist/{user}/profile' , 'ProfileController@index')->name('users.profile');
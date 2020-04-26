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

Route::get('/', function () {
    return view('welcome');
});

//All authentication routes
Auth::routes();

Route::post('/follow/{user}','FollowsController@store');


//Create new post and includes form
Route::get('/posts/create','PostsController@create');

//Posting data and hit store method
Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

//Get informaton of individual profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}','ProfilesController@update')->name('profile.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

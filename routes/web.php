<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Authentication routes...

Route::group(['prefix' => '/'], function () {
    Route::get('home', function () {
        return view('home.home');
    });
    Route::get('our-mission', function () {
        return view('home.mission');
    });
    Route::get('', function () {
        return view('home.home');
    });
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@postLogin');
    Route::get('auth/logout', 'Auth\LoginController@getLogout');
});

Route::post('comment', 'AdHocController@comment');

Route::group(['prefix' => 'poll'], function () {
    Route::get('/', 'PollController@index');
    Route::get('create', 'PollController@create');
    Route::get('{id?}/activate', 'PollController@activate');
    Route::get('{id?}/deactivate', 'PollController@deactivate');
    Route::get('vote/{id?}/{option?}', 'PollController@vote');
    Route::get('{id?}', 'PollController@show');
    Route::post('/', 'PollController@store');
});

Route::group(['prefix' => '{module?}', 'where' => ['module' => '(announcement|discussion|poll)']], function () {
    Route::get('/', 'BasicController@index');
    Route::get('create', 'BasicController@create');
    Route::get('{id?}', 'BasicController@show');
    Route::post('/', 'BasicController@store');
});
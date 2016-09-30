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


Route::group(['prefix' => '/'], function () {

    Route::get('home', function () {
        return view('home.home');
    });
    Route::get('committee', function () {
        return view('home.committee');
    });
    Route::get('', function () {
        return view('home.home');
    });

});

// Authentication routes...
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');
});

Route::group(['prefix' => 'comment'], function(){

    Route::get('{id?}/mark-proper', 'CommentController@markProper');
    Route::get('{id?}/mark-improper', 'CommentController@markImproper');

    Route::post('/', 'CommentController@comment');
});


Route::group(['prefix' => 'poll'], function () {
    Route::get('/', 'PollController@index');
    Route::get('create', 'PollController@create');
    Route::get('{id?}/activate', 'PollController@activate');
    Route::get('{id?}/deactivate', 'PollController@deactivate');
    Route::get('vote/{id?}/{poll_option_id?}', 'PollController@vote');
    Route::get('{id?}', 'PollController@show');
    Route::post('/', 'PollController@store');
});

Route::group(['prefix' => '{module?}', 'where' => ['module' => '(announcement|discussion)']], function () {
    Route::get('/', 'BasicController@index');
    Route::get('create', 'BasicController@create');
    Route::get('{id?}', 'BasicController@show');
    Route::post('/', 'BasicController@store');
});

Route::group(['prefix' => 'member'], function () {
    Route::get('/', 'MemberController@index');
    Route::get('create', 'MemberController@create');
    Route::get('{id?}/edit', 'MemberController@edit');
    Route::get('{id?}', 'MemberController@show');
    Route::post('/', 'MemberController@store');
    Route::post('/{id?}', 'MemberController@update');
});
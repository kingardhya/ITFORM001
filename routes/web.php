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

Route::get('/login', function () {
    return view('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/request/new', 'RequestController@new')->name('request.new');
    Route::post('/request/post', 'RequestController@post')->name('request.post');

    Route::get('/request/view', 'RequestController@view')->name('request.view');
});


Route::get('/test', 'RequestController@test')->name('request.test');
Route::post('/test/regist', 'RequestController@test_regist')->name('request.test_regist');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ajax
Route::post('/ajax/view_request', 'RequestController@ajax_view_request');
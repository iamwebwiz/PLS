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

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// agent routes
Route::group(['prefix' => 'agent', 'namespace' => 'Agent', 'middleware' => 'agent'], function() {
    // agent dashboard
    Route::get('/', 'HomeController@index');

    // agent profile
    Route::get('profile', 'ProfileController@index');
});

<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::middleware([
    'auth'
])->group(function () {

    Route::get('/', 'IndexController@index')->name('index');

    // help
    Route::get('/help', 'HelpController@index')->name('help');

    // acocunts
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/user/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/user/{id}/{scope}', 'UserController@update')->name('user.update');
    Route::delete('/user/{id}', 'UserController@destroy')->name('user.delete');

    // auth account
    Route::get('account/edit', 'Auth\AccountController@edit')->name('account.edit');
    Route::get('account', 'Auth\AccountController@show')->name('account.show');
    Route::post('account/update/{scope}', 'Auth\AccountController@update')->name('account.update');
});

Auth::routes();





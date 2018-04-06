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

    Route::get('account/edit', function () {
        return view('index', [
            'user' => Auth::user(),
            'main_menu' => []
        ]);
    })->name('account.edit');
});

Auth::routes();





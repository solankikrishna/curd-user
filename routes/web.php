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
    return redirect('/admin');
});

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth']],function (){
        Route::get('/','UserController@index');
        Route::get('/adduser','UserController@create')->name('adduser');
        Route::post('/adduser','UserController@store')->name('user.store');
    });
    Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::post('/login','LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

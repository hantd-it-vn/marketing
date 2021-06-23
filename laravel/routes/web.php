<?php

use Illuminate\Support\Facades\Auth;
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

// Route::group(['prefix'=>'form','middleware'=>'auth'],function(){
    Route::get('/','FormController@index')->name('index');
    //Route::get('/AddContact','FormController@add_ht')->name('hienthi');

    Route::get('/AddContact','FormController@add')->name('AddContact');
    Route::post('/AddContact','FormController@post_add');

    Route::get('/login','FormController@login')->name('login');
    Route::post('/login','FormController@post_login')->name('login');

    Route::get('/user','UserController@user')->name('user');

    Route::get('/user-add','UserController@add')->name('user_add');
    Route::post('/user-add','UserController@user_add');

    Route::get('/langguage/{language}','LanguageController@index')->name('language.index');






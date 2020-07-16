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

//获取微信access_token的路由
Route::get('/wx/token','TestController@getToken');

//获取curl 路由
Route::get('/wx/curlToken','TestController@getCurl');
//获取guzzle路由
Route::get('/wx/guzzleToken','TestController@getGuzzleToken');

//获取api
Route::get('/wx/access_token','TestController@access_token');
//获取www
Route::get('/wx/wwwToken','TestController@wwwToken');

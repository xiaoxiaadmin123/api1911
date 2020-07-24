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

//测试登录
Route::post('/wx/login','TestController@login');



//注册
Route::post('/user/reg','User\IndexController@reg');
//登录
Route::post('/user/login','User\IndexController@login');
//个人中心
Route::get('/user/center','User\IndexControllrt@center');


Route::get("/test/enc","TestController@enc");














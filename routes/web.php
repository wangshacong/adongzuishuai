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

// Route::get('/', function () {
//     return view('welcome');
// });


//后台页面
//登录页面
//首页
Route::get('admin', 'Admin\AdminController@index');
//文章列表
Route::get('news1', 'Admin\AdminController@news1index');
//文章添加
//文章修改
//文章删除
Route::get('news1/{id}/destroy', 'Admin\AdminController@destroy');


//前台页面
//首页
Route::get('/', 'HomeController@index');
//列表页
Route::get('fenlei/{id}','HomeController@fenlei');
//内容页
Route::get('article/{id}','HomeController@content');
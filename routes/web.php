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

//首页
Route::get('/', 'HomeController@index');
//列表页
Route::get('fenlei/{id}','HomeController@fenlei');
//内容页
Route::get('article/{id}','HomeController@content');
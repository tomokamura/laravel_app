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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
Route::resource('todo', 'TodoController');


















// 第二引数にながながと名前空間を書かなくていいのは、RouteServiceProviderがルートファイルをロードしているから、Contorollersディレクトリより後の部分のみでよい

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

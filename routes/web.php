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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('lesson', function () {
//    return view('/client/lesson/index');
//});
//
//Route::get('admin',function () {
//   return view('/admin/login/admin_login');
//});
//
//Route::get('login',function () {
//   return view('/client/login/user_login');
//});

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
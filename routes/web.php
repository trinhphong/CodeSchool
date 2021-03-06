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
//Route::get('adminform',function () {
//   return view('/admin/master/master');
//});

//Route::get('login',function () {
//   return view('/client/login/user_login');
//});

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/manager/course', 'CourseController@index')->name('admin.course');
    Route::resource('course','CourseController');
    Route::resource('level','LevelController');
    Route::get('/level/{id}/course','LevelController@index')->name('level.index');
});
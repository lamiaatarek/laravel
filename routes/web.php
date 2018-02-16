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


Route::group(['namespace'=>'User'],function(){
Route::get('/post/{post}','postcontroller@index')->name('post');
Route::get('/','Homecontroller@index');
Route::get('post/category/{category}','Homecontroller@category')->name('category');
});


Route::group(['namespace'=>'Admin'],function(){
	Route::get('admin/home','Homecontroller@index')->name('admin.home');
Route::get('admin/login','Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','Auth\LoginController@login');

Route::resource('admin/role','roleController');
Route::resource('admin/user','Usercontroller');
Route::resource('admin/post','postcontroller');
Route::resource('admin/tag','tagcontroller');
Route::resource('admin/category','categorycontroller');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

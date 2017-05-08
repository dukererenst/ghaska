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



Route::get('/', 'HomeController@index')->name('admin');
Route::get('/about_us',array('as'=>'about_us', 'uses'=>'HomeController@aboutUs'));
Route::get('/contact_us',array('as'=>'contact_us', 'uses'=>'HomeController@contactUs'));
Route::get('/blog_page',array('as'=>'blogs', 'uses'=>'HomeController@blogs'));
Route::get('/admin', 'AdminDashBoardController@dashBoard')->name('admin')->middleware('adminAuth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('regions','RegionController');
Route::resource('members','MembershipController');
Route::resource('blog_category','BlogCategoryController');
Route::resource('blog','BlogController');
Route::resource('pending_user','PendingUserController');

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

Auth::routes();
Route::resource('/','IndexController');
Route::resource('/about_us','AboutUsController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/create_news','NewsController');
Route::resource('/settings','AccountSettingsController');
Route::resource('/mailing','MailingController');
Route::resource('/user_settings','UserSettingsController');
Route::resource('/abiturient_info','AbiturientInfoController');

Route::resource('/notify','NotifyController');


Route::get('/reception_time','ReceptionTimeController@index');
Route::post('/reception_time','ReceptionTimeController@changeStatus');

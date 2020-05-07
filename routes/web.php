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

use App\User;

Auth::routes();
Route::resource('/', 'IndexController');
Route::resource('/about_us', 'AboutUsController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/add_news', 'NewsController');
Route::resource('/profile', 'ProfileController');
Route::resource('/mailing', 'MailingController');
Route::resource('/user_settings', 'UserSettingsController');
Route::resource('/abiturient_info', 'AbiturientInfoController');

Route::resource('/notify', 'NotifyController');


Route::get('/reception_time', 'ReceptionTimeController@index');
Route::post('/reception_time', 'ReceptionTimeController@changeStatus');
Route::put('/reception_time', 'ReceptionTimeController@addReceptionTime');
Route::delete('/reception_time', 'ReceptionTimeController@deleteReceptionTime');

Route::resource('/reception_date', 'ReceptionDateController');

Route::resource('/submit_documents', 'SubmitDocumentsController');
Route::resource('/news', 'NewsController');

Route::get('change_locale/{locale}', function($locale) {
    if (in_array($locale, ['ru', 'en', 'ar'])) {
        if (!empty(Auth::user())) {
            $user = new User();
            $user
                ->where('id', Auth::user()->id)
                ->update(['lang' => $locale]);
        }
        session(['locale' => $locale]);
    }

    return redirect()->back();    
});
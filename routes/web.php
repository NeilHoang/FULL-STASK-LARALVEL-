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

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::middleware('checkLogin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index.login');
});

Route::middleware('locale')->group(function () {

    Route::get('/login', 'LoginController@showFormLogin');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');


    Route::get('/list', 'userController@getAll')->name('user.list');
    Route::get('/create', 'userController@create')->name('user.create');
    Route::post('/store', 'userController@store')->name('user.store');
    Route::get('/delete/{id}', 'userController@destroy')->name('user.destroy');
    Route::get('/edit/{id}', 'userController@edit')->name('user.edit');
    Route::post('/update/{id}', 'userController@update')->name('user.update');


    Route::group(['prefix' => 'cities'], function () {
        Route::get('/', 'CityController@index')->name('cities.index');
        Route::get('/create', 'CityController@create')->name('cities.create');
        Route::post('/store', 'CityController@store')->name('cities.store');
        Route::get('/{id}/edit', 'CityController@edit')->name('cities.edit');
        Route::get('/{id}/delete', 'CityController@destroy')->name('cities.destroy');
    });

    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', 'CustomerController@index')->name('customer.index');
        Route::get('/create', 'CustomerController@create')->name('customer.create');
        Route::post('/store', 'CustomerController@store')->name('customer.store');
        Route::get('/delete{id}', 'CustomerController@destroy')->name('customer.destroy');
    });
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');

});


//Login Facebook

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/login/{provider}/callback/', 'SocialController@callback');


//Login Google
Route::get('/auth/redirect/{provider}', 'LoginController@redirect');
Route::get('/callback/{provider}', 'LoginController@callback');

Route::get('/home', 'HomeController@index')->name('home');

//Language



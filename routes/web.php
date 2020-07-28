<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'doctor'], function() {
    Route::get('/',                                     'DoctorController@index')->name('doctor.index');
    Route::get('/createAndAlterView/{id?}',             'DoctorController@createAndAlterView')->name('doctor.createAndAlterView');
    Route::post('/',                                    'DoctorController@save')->name('doctor.save');
    Route::put('/{id}',                                 'DoctorController@update')->name('doctor.update');
    Route::delete('/{id}',                              'DoctorController@delete')->name('doctor.delete');
});
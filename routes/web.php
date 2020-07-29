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

Route::group(['prefix' => 'patient'], function() {
    Route::get('/',                                     'PatientController@index')->name('patient.index');
    Route::get('/createAndAlterView/{id?}',             'PatientController@createAndAlterView')->name('patient.createAndAlterView');
    Route::post('/',                                    'PatientController@save')->name('patient.save');
    Route::put('/{id}',                                 'PatientController@update')->name('patient.update');
    Route::delete('/{id}',                              'PatientController@delete')->name('patient.delete');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/',                                     'UserController@index')->name('user.index');
    Route::get('/createAndAlterView/{id?}',             'UserController@createAndAlterView')->name('user.createAndAlterView');
    Route::post('/',                                    'UserController@save')->name('user.save');
    Route::put('/{id}',                                 'UserController@update')->name('user.update');
    Route::delete('/{id}',                              'UserController@delete')->name('user.delete');
});

Route::group(['prefix' => 'scheduling'], function() {
    Route::get('/',                                     'SchedulingController@index')->name('scheduling.index');
    Route::get('/createAndAlterView/{id?}',             'SchedulingController@createAndAlterView')->name('scheduling.createAndAlterView');
    Route::post('/',                                    'SchedulingController@save')->name('scheduling.save');
    Route::put('/{id}',                                 'SchedulingController@update')->name('scheduling.update');
    Route::delete('/{id}',                              'SchedulingController@delete')->name('scheduling.delete');
});
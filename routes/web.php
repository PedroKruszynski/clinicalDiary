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
    // Route::get('/createAndAlterView/{id?}',             'InterviewController@createAndAlterView')->middleware('role:developer|administrador')->name('createAndAlterView');
    // Route::post('/save',                                'InterviewController@saveInterview')->middleware('role:developer|administrador')->name('saveInterview');
    // Route::put('/{id}',                                 'InterviewController@disableInterview')->middleware('role:developer|administrador')->name('disableInterview');
    // Route::delete('/{id}',                              'InterviewController@deleteInterview')->middleware('role:developer|administrador')->name('deleteInterview');
});
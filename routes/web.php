<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','IndexController@homepage')->name('home');

Route::get('/en','IndexController@homepageen')->name('homeen');


Route::get('/admin/candidate','IndexController@AdminCandidate')->name('AdminCandidate');;

Route::get('/logout', function(){
    Auth::logout();
    return Redirect('/login');
 })->name('logout');

 Route::get('/about', function(){
    return view('about');
 });
 Route::get('/en/about', function(){
   return view('eng.about');
});


Auth::routes(['register' => false]);



Route::get('/vacancies','JobsController@page')->name('vacancies');

Route::get('/vacancies/en','JobsController@page_en')->name('vacancies_en');

Route::get('/trainings','TrainingController@page')->name('trainings');

Route::get('/en/trainings','TrainingController@pageen')->name('trainingsen');

Route::resource('jobs','JobsController');

Route::get('/en/jobs/{id}','JobsController@jobsen')->name('jobsen');

Route::resource('/training','TrainingController');

Route::get('/en/training/{id}','TrainingController@showen')->name('showen');


Route::resource('/applyjobs','SendcvController');

Route::get('/applyjob/{id}','SendcvController@apply')->name('apply');

Route::get('/applytraining/{id}','TrainingbookController@apply')->name('applytraining');

Route::get('/contact','ContactController@index')->name('contact');

Route::get('/en/contact','ContactController@contacten')->name('contacten');

Route::post('/contact/sendmail','ContactController@sendmail')->name('sendmail');


Route::resource('trainingbook','TrainingbookController');

Route::resource('/blog','BlogController');

Route::get('/hcblog','BlogController@blog_page')->name('hcblog');

Route::get('/en/hcblog','BlogController@blog_pageen')->name('hcblogen');
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('home', 'HomeController@index');
Route::get('woman', 'HomeController@woman');
Route::get('new_in', 'HomeController@new_in');
Route::get('members', 'HomeController@member');

Route::get('product_detail','HomeController@product_detail');

Route::get('register', 'UserController@registerpage');
Route::post('register', 'UserController@signup');


Route::get('sign_in', 'UserController@signin');
Route::post('sign_in', 'UserController@login');
Route::get('sign_out', 'UserController@logout');
Route::get('my_page','UserController@my_page');
Route::post('my_page','UserController@my_page_edit');

Route::get('online_survey','SurveyController@survey_page');
Route::post('online_survey','SurveyController@submit_survey');

Route::post('add_member','UserController@add_member');

Route::get('admin_page','UserController@admin_page');
Route::post('change_access','UserController@change_access');

Route::get('people', 'UserController@people_page');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


<?php
use Illuminate\Support\Facades\Route;

Route::get('about_us/{v}/{contact}', 'HomeController@about');
Route::get('student-add', 'StudentController@add');
Route::post('store-student', 'StudentController@store');
Route::get('students', 'StudentController@all');
Route::get('edit-student/{id}', 'StudentController@edit');
Route::post('update-student/{id}', 'StudentController@update');
Route::get('delete-student/{id}', 'StudentController@delete');


Route::get('/', function () {
    return view('website.pages.welcome');
});


//routes for admin panel
//authentication
Route::get('login','AuthController@login');
Route::post('loginstore', 'AuthController@loginstore');

Route::group(['middleware' => 'checkloggedin'], function(){
    Route::get('logout', 'AuthController@logout');
    Route::group(['middleware' => 'checkadmin'], function(){
        Route::get('dashboard', function (){
           return view('admin.pages.dashboard');
       });
       Route::get('tables','UserController@index' );
       Route::get('charts', function (){
           return view('admin.pages.charts');
       });
       Route::get('semesters', 'SemesterController@all');
       Route::get('image-upload', 'ImageController@index');
       Route::post('upload','ImageController@store');
    });

//routes for website panel

Route::group(['middleware' => 'checkstudent'], function(){
    
    Route::get('about-us', function () {
            return view('website.pages.about');
        });
    Route::get('services', function () {
            return view('website.pages.services');
        });
    Route::get('contact', function () {
            return view('website.pages.contact');
        });
    });
});
Route::get('ajax', 'AjaxController@ajax');
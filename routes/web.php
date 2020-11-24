<?php
use Illuminate\Support\Facades\Route;

//routes for admin panel
//authentication
Route::get('register', function(){
    return view('admin.pages.auth.register');
});

// Route::get('email_available', 'AuthController@index');
// Route::post('email_available/check', 'AuthController@check')->name('email_available.check');


Route::get('forgot', function(){
    return view('admin.pages.auth.forgot ');
});

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

        Route::get('student-add', 'StudentController@add');
        Route::post('store-student', 'StudentController@store');
        Route::get('students', 'StudentController@all');
        Route::get('edit-student/{id}', 'StudentController@edit');
        Route::post('update-student/{id}', 'StudentController@update');
        Route::get('delete-student/{id}', 'StudentController@delete');

        Route::get('teacher-add', 'TeacherController@add');
        Route::post('store-teacher', 'TeacherController@store');
        Route::get('teachers', 'TeacherController@all');
        Route::get('edit-teacher/{id}', 'TeacherController@edit');
        Route::post('update-teacher/{id}', 'TeacherController@update');
        Route::get('delete-teacher/{id}', 'TeacherController@delete');
    });

//routes for website panel

Route::group(['middleware' => 'checkstudent'], function(){
    Route::get('/', function () {
        return view('website.pages.welcome');
    });

    Route::get('profile', function () {
            return view('website.pages.profile');
        });
    Route::get('course', function () {
            return view('website.pages.course');
        });
    //Route::get('image', 'ImageController@index');
    Route::post('upload','ImageController@store');
    Route::get('dynamic-enroll', 'DynamicController@index');
    Route::get('edit-student/{id}', 'StudentController@edit');
    Route::post('update-student/{id}', 'StudentController@update');
    });
});
Route::get('ajax', 'AjaxController@ajax');
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
Route::get('/course','CoursesController@getInputCourses');
Route::post('/course','CoursesController@postOneCourses');

Route::get('/teacher','TeacherController@getInputTeacher');
Route::post('/teacher','TeacherController@postOneTeacher');

Route::get('/student','StudentController@getInputStudent');
Route::post('/student','StudentController@postOneStudent');

Route::get('/students','StudentController@getAllStudents');
Route::get('/teachers','TeacherController@getAllTeachers');
Route::get('/courses','CoursesController@getAllCourses');

Route::get('/', function () {
    return view('main');
});

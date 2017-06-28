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

Route::get('/teacher/remove','TeacherController@getRemoveTeacher');
Route::post('/teacher/remove','TeacherController@postRemoveTeacher');
Route::delete('/teacher/remove','TeacherController@deleteRemoveTeacher');

Route::get('/student/remove','StudentController@getRemoveStudent');
Route::post('/student/remove','StudentController@postRemoveStudent');
Route::delete('/student/remove','StudentController@deleteRemoveStudent');

Route::get('/teacher/update','TeacherController@getUpdateTeacher');
Route::post('/teacher/update','TeacherController@postUpdateTeacher');
Route::put('/teacher/update','TeacherController@putUpdateTeacher');

Route::get('/student/update','StudentController@getUpdateStudent');
Route::post('/student/update','StudentController@postUpdateStudent');
Route::put('/student/update', 'StudentController@putUpdateStudent');

Route::get('/teacher/create', 'TeacherController@getCreateTeacher');
Route::post('/teacher/create', 'TeacherController@postCreateTeacher');

Route::get('/student/create','StudentController@getCreateStudent');
Route::post('/student/createss', 'StudentController@postCreateStudent');

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

<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

use HttpClient\Http\Requests;

class CoursesController extends ClientController
{
    public function getAllCourses()
    {
      $courses = $this->obtionAllCourses();
      return view('courses.all-courses',['courses' => $courses]);
    }
}

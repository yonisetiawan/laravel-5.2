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

    public function getInputCourses()
    {
      return view('courses.input-courses');
    }

    public function postOneCourses(Request $request)
    {
      $this->validate($request, ['coursesId' => 'required|numeric']);
      $coursesId = $request->get('coursesId');
      $courses = $this->obtainOneCourses($coursesId);
      return view('courses.one-courses',['courses' => $courses]);
    }
}

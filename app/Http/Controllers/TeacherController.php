<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

use HttpClient\Http\Requests;

class TeacherController extends ClientController
{
    public function getAllTeachers()
    {
      $teachers = $this->obtionAllTeachers();
      return view('teachers.all-teachers', ['teachers' => $teachers]);
    }
    public function getInputTeacher()
    {
      return view('teachers.input-teacher');
    }

    public function postOneTeacher(Request $request)
    {
      $this->validate($request, ['teacherId' => 'required|numeric']);
      $teacherId = $request->get('teacherId');
      $teacher = $this->obtainOneTeacher($teacherId);
      return view('teachers.one-teacher', ['teacher' => $teacher]);
    }
}

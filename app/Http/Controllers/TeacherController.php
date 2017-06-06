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
}

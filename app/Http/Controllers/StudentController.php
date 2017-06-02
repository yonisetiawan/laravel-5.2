<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

use HttpClient\Http\Requests;

class StudentController extends Controller
{
    public function getAllStudents()
    {
        $students = $this->obtainAllStudents();
        return view('students.all-students', ['students' => $students]);
    }
}

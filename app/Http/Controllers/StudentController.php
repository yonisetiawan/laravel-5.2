<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

use HttpClient\Http\Requests;

class StudentController extends ClientController
{
    // Get All
    public function getAllStudents()
    {
        $students = $this->obtainAllStudents();
        return view('students.all-students', ['students' => $students]);
    }

    // Show Input Search Student
    public function getInputStudent()
    {
      return view('students.input-student');
    }

    // Post to Get Result Search Student
    public function postOneStudent(Request $request)
    {
      $this->validate($request, ['studentId' => 'required|numeric']);
      $studentId = $request->get('studentId');
      $student = $this->obtainOneStudent($studentId);
      return view('students.one-student', ['student' => $student]);
    }

    // Show Input Create Student
    public function getCreateStudent()
    {
      return view('students.create-student');
    }

    // Show All List Student With a Student Has Been Created
    public function postCreateStudent(Request $request)
    {
      $message = $this->createOneStudent($request->all());
      return redirect('/students')->with('success', $message);
    }

}

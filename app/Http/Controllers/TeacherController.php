<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cache\ApcStore;

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

    //Show Input Create Teacher
    public function getCreateTeacher()
    {
      return view('teachers.create-teacher');
    }

    // Show All List Teacher With a Teacher Has Been Created
    public function postCreateTeacher(Request $request)
    {
      $message = $this->createOneTeacher($request->all());
      return redirect('/teachers')->with('success', $message);
    }

    //Update Teacher
    public function getUpdateTeacher()
    {
      $teachers = $this->obtionAllTeachers();
      return view('teachers.select-teacher',['teachers' => $teachers]);
    }
    public function postUpdateTeacher(Request $request)
    {
      $teacherId = $request->get('teacherId');
      $teacher = $this->obtainOneTeacher($teacherId);
      return view('teachers.update-teacher',['teacher' => $teacher]);
    }

    public function putUpdateTeacher(Request $request)
    {
      $message = $this->updateOneTeacher($request->all());
      return redirect('/teachers')->with('success',$message);
    }

    // delete

    public function getRemoveTeacher()
    {
      $teachers = $this->obtionAllTeachers();
      return view('teachers.select-remove-teacher',['teachers' => $teachers]);
    }

    public function postRemoveTeacher(Request $request)
    {
      $teacherId = $request->get('teacherId');
      $teacher = $this->obtainOneTeacher($teacherId);
      return view('teachers.confirm-remove-teacher',['teacher' => $teacher]);
    }

    public function deleteRemoveTeacher(Request $request)
    {
      $message = $this->removeOneTeacher($request->all());
      return redirect('/teachers')->with('success', $message);
    }


}

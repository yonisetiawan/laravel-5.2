@extends('layouts.master')

@section('content')
  <form class="" action="{{url('/student/remove')}}" method="post">
    {{ csrf_field() }}
    <legend>Select the Student</legend>
    <div class="form-group">
      <label>Student Id</label>
      <select class="form-control" name="studentId" required="required">
        <option>Select a Student</option>
        @foreach ($students as $student)
          <option value="{{$student->id}}">{{$student->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Remove Student</button>
  </form>

@endsection

@extends('layouts.master')

@section('content')
  <form class="" action="{{url('/student/update')}}" method="post">
    {{csrf_field()}}
    <legend>Select the Student</legend>

    <div class="form-group">
      <label for="">Student Id</label>
      <select class="form-control" name="studentId">
        <option>Select a Student</option>
        @foreach ($students as $student)
          <option value="{{$student->id}}">{{$student->name}}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Student</button>
  </form>

@endsection

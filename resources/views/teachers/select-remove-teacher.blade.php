@extends('layouts.master')
@section('content')
  <form class="" action="{{url('/teacher/remove')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <legend>Select the Teacher</legend>
      <select class="form-control" name="teacherId" required="required">
        <option>Select a Teacher</option>
        @foreach ($teachers as $teacher)
          <option value="{{$teacher->id}}">{{$teacher->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Remove Teacher</button>
  </form>
@endsection

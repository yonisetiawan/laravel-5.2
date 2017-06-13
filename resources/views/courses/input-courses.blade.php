@extends('layouts.master')

@section('content')
  <form class="" action="{{url('/course')}}" method="post" role="form">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Courses Id</label>
      <input type="number" class="form-control" name="coursesId" placeholder="The Courses Id" required>
    </div>
    <button type="submit" class="btn btn-primary">Show Courses</button>
  </form>
@endsection

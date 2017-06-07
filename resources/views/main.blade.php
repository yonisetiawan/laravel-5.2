@extends('layouts.master')

@section('content')
  <ul class="list-group">
      <li class="list-group-item"><a href="{{url('/students')}}">Show all the Students</a></li>
      <li class="list-group-item"><a href="{{url('/teachers')}}">Show all the Teachers</a></li>
      <li class="list-group-item"><a href="{{url('/courses')}}">Show all the Courses</a></li>
  </ul>

  <ul class="list-group">
		<li class="list-group-item"><a href="{{url('/student')}}">Show a Specific Student</a></li>
		<li class="list-group-item"><a href="{{url('/teacher')}}">Show a Specific Teacher</a></li>
		<li class="list-group-item"><a href="{{url('/course')}}">Show a Specific Course</a></li>
	</ul>
@endsection

@extends('layouts.master')
@section('content')
  <form class="" action="{{url('/student/remove')}}" method="post">
    {{ csrf_field() }}
    {{method_field('DELETE')}}

    <legend>Delete a Student</legend>

		<p>You are about to remove this student, please confirm</p>

		<input type="hidden" name="id" class="form-control" value="{{$student->id}}">

		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" value="{{$student->name}}" required disabled>
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" value="{{$student->address}}" required disabled>
		</div>

		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" class="form-control" name="phone" value="{{$student->phone}}" required disabled>
		</div>

		<div class="form-group">
			<label for="">Career</label>
			<select name="career" class="form-control" required disabled>
				<option>Select a Career</option>
				<option value="math" {{$student->career == 'math' ? 'selected' : ''}}>Math</option>
				<option value="physics" {{$student->career == 'physics' ? 'selected' : ''}}>Physics</option>
				<option value="engineering" {{$student->career == 'engineering' ? 'selected' : ''}}>Engineering</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Remove Student</button>

  </form>
@endsection

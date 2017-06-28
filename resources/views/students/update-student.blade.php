@extends('layouts.master')

@section('content')
  <form class="" action="{{url('/student/update')}}" method="post">
    {{ csrf_field() }}

    {{method_field('PUT')}}
    <legend>Update a Student</legend>
    <input type="hidden" name="id" value="{{$student->id}}" class="form-control">

    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" value="{{$student->name}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="">Address</label>
      <input type="text" class="form-control" name="address" value="{{$student->address}}" required>
    </div>

    <div class="form-group">
      <label for="">Phone</label>
      <input type="text" class="form-control" name="phone" value="{{$student->phone}}" required>
    </div>

    <div class="form-group">
      <label for="">Career</label>
      <select name="career" class="form-control" required>
        <option>Select a Career</option>
        <option value="math" {{$student->career == 'math' ? 'selected' : ''}}>Math</option>
        <option value="physics" {{$student->career == 'physics' ? 'selected' : ''}}>Physics</option>
        <option value="engineering" {{$student->career == 'engineering' ? 'selected' : ''}}>Engineering</option>
      </select>
    </div>



    <button type="submit" class="btn btn-primary">Update Student</button>
  </form>

@endsection

@extends('layouts.master')

@section('content')
  <form class="" action="{{url('/teacher/update')}}" method="post">
    {{ csrf_field() }}
    <legend>Select the Teacher</legend>
    <div class="form-group">
      <label for="">Teacher Id</label>
        <select class="form-control" name="teacherId">
          <option>Select a Teacher</option>
            @foreach ($teachers as $teacher)
              <option value="{{$teacher->id}}">{{$teacher->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Select Teacher</button>
  </form>
@endsection

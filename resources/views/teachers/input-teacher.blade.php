@extends('layouts.master')

@section('content')
  <form class="" action="{{url('/teacher')}}" method="post" role="form">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Teacher Id</label>
      <input type="number" class="form-control" placeholder="The Teacher Id" name="teacherId" required>
    </div>
    <button type="submit" class="btn btn-primary">Show Teacher</button>
  </form>
@endsection

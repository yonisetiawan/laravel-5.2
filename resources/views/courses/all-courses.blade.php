@extends('layouts.master')

@section('content')
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($courses as $courses)
        <tr>
          <td>{{$courses->id}}</td>
          <td>{{$courses->title}}</td>
          <td>{{$courses->description}}</td>
          <td>{{$courses->value}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

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
			<tr>
				<td>{{$courses->id}}</td>
				<td>{{$courses->title}}</td>
				<td>{{$courses->description}}</td>
				<td>{{$courses->value}}</td>
			</tr>
		</tbody>
	</table>
@endsection

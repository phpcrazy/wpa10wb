@extends('student::layouts.master')

@section('content')
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID#</th>
			<th>Name</th>
			<th>Address</th>
			<th>Class</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($students as $student)
    		<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->address }}</td>
				<td>{{ $student->class_name }}</td>
				<td><a href="{{ URL::to('/detail') }}/{{ $student->id }}">Detail</a></td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop
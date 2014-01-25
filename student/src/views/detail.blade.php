@extends('student::layouts.master')

@section('content')
<div id="content" class="row">
	<div class="span12">
		<table class="table table-striped">
			<tr>
				<td>ID#</td>
				<td>{{ $students[0]->id }}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>{{ $students[0]->name }}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{ $students[0]->address }}</td>
			</tr>
			<tr>
				<td>Class</td>
				<td>{{ $students[0]->class_name }}</td>
			</tr>
			<tr>
				<td>Interest - Script</td>
				<td>
					@foreach($scripts as $script)
					{{ $script->interest_name }},
					@endforeach
				</td>
			</tr>
			<tr>
				<td>Interest - Language</td>
				<td>
					@foreach($languages as $language)
					{{ $language->interest_name }},
					@endforeach
				</td>	
			</tr>
		</table>
		<h3>Experience</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Place Name</th>
					<th>From</th>
					<th>To</th>
				</tr>
			</thead>
			<tbody>
				@foreach($experiences as $experience)
					<tr>
						<td>{{ $experience->id }}</td>
						<td>{{ $experience->exp_name }}</td>
						<td>{{ $experience->from }}</td>
						<td>{{ $experience->to }}</td>
					</tr>
				@endforeach
			</tbody>

		</table>
	</div>
</div> <!-- end of content -->
@stop
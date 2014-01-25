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
 						 							PHP,  						 							HTML,  						 							CSS,  						 					</td>
 					</tr>
 					<tr>
 						<td>Interest - Language</td>
 						<td>
 							 							C++,  						 							C#,  						 							VB.NET,  						 						</td>
 						</tr>
 					</table>
 					<h3>Experience</h3>
 					<table class="table table-striped">
 						<tr>
 							<td>Myanmar Tutorials</td>
 							<td>From - 1993  To - 2013</td>
 						</tr>
 						<tr>
 							<td>Myanmar Tutors</td>
 							<td>From - 2012  To - 2013</td>
 						</tr>
 					</table>
 				 				</div>
 			</div> <!-- end of content -->
@stop
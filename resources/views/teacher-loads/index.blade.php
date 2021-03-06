@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">User ID</th>
					<th scope="col">Subject Strand ID</th>
					<th scope="col">Section ID</th>
					<th scope="col">Actions</th>
			</thead>
			<tbody>
				@foreach($teacherloads as $teacherload)
					<tr>
						<td>{{ $teacherload->user_id }}</td>
						<td>{{ $teacherload->subject_strand_id }}</td>
						<td>{{ $teacherload->section_id }}</td>
						<td><a href="/teacher-loads/{{ $teacherload->user_id }}/edit">Edit</a></
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teacher-loads/add'>Add New Teacher Load</a>
	</div>
@endsection
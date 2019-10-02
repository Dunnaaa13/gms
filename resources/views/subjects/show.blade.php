@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subject->teachers as $teacher)
					<tr>
						<td>{{ $task->id }}</td>
						<td>{{ $task->name }}</td>
						<td>
							<a href="/subjects/tasks/{{ $teacher->id }}/edit">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/projects/{{ $project->id }}/tasks'>Add a new Teacher</a>
	</div>
@endsection
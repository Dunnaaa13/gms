@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Actions</th>
			</thead>
			<tbody>
				@foreach($strands as $strand)
					<tr>
						<td>{{ $strand->id }}</td>
						<td>{{ $strand->name }}</td>
						<td><a href="/strands/{{ $strand->id }}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/strands/add'>Add New Strand</a>
	</div>
@endsection
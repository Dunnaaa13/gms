@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		    <label for="title">ID</label>
		    <input type="text" class="form-control" name='id' aria-describedby="emailHelp" placeholder="ID">
		  </div>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="is_active">Is Active</label>
		    <input type="checkbox" checked class="form-control" name="is_active" placeholder="is_active">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
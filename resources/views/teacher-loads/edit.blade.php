@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subjects/{{ $teacherload->user_id }}/update">
		@csrf
		  <div class="form-group">
		    <label for="user_id">User ID</label>
		    <input type="text" class="form-control" name='user_id' aria-describedby="emailHelp" placeholder="User ID">
		  </div>
		  <div class="form-group">
		    <label for="subject_strand_id">Subject Strand ID</label>
		    <input type="text" class="form-control" name="subject_strand_id" placeholder="Subject Strand ID">
		  </div>
		  <div class="form-group">
		    <label for="section_id">Section ID</label>
		    <input type="text" class="form-control" name="section_id" placeholder="Section ID">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
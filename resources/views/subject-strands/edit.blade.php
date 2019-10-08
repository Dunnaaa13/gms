@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subject-strands/{{ $subjectstrand->id }}/update">
		@csrf
		  <div class="form-group">
		    <label for="title">ID</label>
		    <input type="text" class="form-control" name='id' aria-describedby="emailHelp" placeholder="ID">
		  </div>
			<div class="form-group">
		    <label for="subject_id">Subject ID</label>
		    <input type="text" class="form-control" name="subject_id" placeholder="Subject ID">
		  </div>
		  <div class="form-group">
		    <label for="strand_id">Strand ID</label>
		    <input type="text" class="form-control" name="strand_id" placeholder="Strand ID">
		  </div>
		  <div class="form-group">
		    <label for="project_id">Project ID</label>
		    <input type="text" class="form-control" name="project_id" placeholder="Project ID">
		  </div>
		  <div class="form-group">
		    <label for="semester">Semester</label>
		    <input type="text" class="form-control" name="semester" placeholder="Semester">
		  </div>
		  <div class="form-group">
		    <label for="grade_level">Grade Level</label>
		    <input type="text" class="form-control" name="grade_level" placeholder="Grade Level">
		  	</div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
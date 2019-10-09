@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="form-group">
		    <label for="title">ID</label>
		    <input type="text" class="form-control" name='id' aria-describedby="emailHelp" placeholder="ID">
		  </div>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="advisory_section">Advisory Section</label>
		    <input type="text" class="form-control" name="advisory_section" placeholder="Advisory Section">
		  </div>
		<form>
			<input value='{{ $teacher-> id }}' type= 'hidden' name= 'id'>
			<select name= 'advisory_section'>
				@foreach($sections as $section)
				<option value='$section - id'> {{ $section -> name }} </option>
				@endforeach
			</select>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
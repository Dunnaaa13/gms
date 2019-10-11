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
		<form>
			<input value='{{ $section-> id }}' type= 'hidden' name= 'id'>
			<select name= 'advisory_section'>
				@foreach($sections as $section)
				<option value='$section - id'> {{ $section -> name }} </option>
				@endforeach
			</select>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
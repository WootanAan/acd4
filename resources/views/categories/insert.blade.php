@extends('layouts.app')

@section('konten')
<br>
<div class="container">
	<form method="POST" action="{{ url('/categories')}}">
		@csrf
		<div class="form-group">
		   <label for="exampleInputEmail1">Kategori</label>
		   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name kategori" name="name">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection
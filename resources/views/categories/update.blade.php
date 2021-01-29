@extends('layouts.app')

@section('konten')
<br>
<br>
<div class="container">
	<form method="post" action="/categories/{{ $category->id}}">
		@csrf
		@method('PUT')
		<div class="from-group row">
			<label for="inputKategori" class="col-sm-2 col-form-label">Nama Kategori : </label>
			<div class="col-sm-10">
			    <input type="text" class="form-control" id="inputKategori" placeholder="kategori" name="name" value="{{ $category->name}}">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
</div>
@endsection
@extends('layouts.app')

@section('konten')
<div class="container">
	<br>
	<a href="{{ url('/categories/create')}}"><button type="button" class="btn btn-success">Tambah</button></a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td><a href="{{ url('/categories/'.$category->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a> <form class="d-inline-block" action="/categories/{{ $category->id }}" method="post">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Hapus</button></form></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
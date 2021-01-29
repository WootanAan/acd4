@extends('layouts.app')

@section('konten')
<div class="container">
	<br>
	<a href="{{ url('/suppliers/create')}}"><button type="button" class="btn btn-success">Tambah</button></a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col">Alamat</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach($suppliers as $supplier)
			<tr>
				<td>{{$supplier->id}}</td>
				<td>{{$supplier->name}}</td>
				<td>{{$supplier->email}}</td>
				<td>{{$supplier->address}}</td>
				<td><a href="{{ url('/suppliers/'.$supplier->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a> 
					<form class="d-inline-block" action="/suppliers/{{$supplier->id}}" method="post">
						@csrf 
						@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection
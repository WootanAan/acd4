@extends('layouts.app')

@section('konten')
<div class="container">
	<br>
	<a href="{{ url('/products/create')}}"><button type="button" class="btn btn-success">Tambah</button></a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama Produk</th>
				<th scope="col">Deskripsi Produk</th>
				<th scope="col">Harga Beli</th>
				<th scope="col">Harga Jual</th>
				<th scope="col">Stok</th>
				<th scope="col">Kategori</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->description}}</td>
				<td>Rp. {{$product->purchase_price}}</td>
				<td>Rp. {{$product->sale_price}}</td>
				<td>{{$product->stock}}</td>
				<td>{{$product->category->name}}</td>
				<td>
					<a href="{{ url('/products/'.$product->id.'/edit')}}"><button type="button" class="btn btn-warning">Edit</button></a>
					<form class="d-inline-block" action="/products/{{$product->id}}" method="post">
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
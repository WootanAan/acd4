@extends('layouts.app')

@section('konten')
<br>
<div class="container">
	<form method="post" action="{{'/products'}}">
		<div class="from-group row">
		@csrf
			<table>
				<tr>
					<td>Name</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="nama produk" name="name">
						</div>
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<div class="col-sm-12">
						    <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Purchase price</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="harga beli" name="purchase_price">
						</div>
					</td>
				</tr>
				<tr>
					<td>Sale price</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="harga jual" name="sale_price">
						</div>
					</td>
				</tr>
				<tr>
					<td>Stock</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="stok barang" name="stock">
						</div>
					</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<div class="col-sm-12">
						    <select class="form-control" id="sel1" name="category_id">
						    @foreach($categories as $category)
						    	<option value="{{$category->id}}">{{$category->name}}</option>
						    @endforeach
						    </select>
						</div>
					</td>
				</tr>
				<tr>
					<td> </td>
					<td> <button type="submit" class="btn btn-primary" style="float: right;">Tambah</button></td>
				</tr>
			</table>
			
		</div><br>
	</form>
</div>			
@endsection
@extends('layouts.app')

@section('konten')
<br>
<div class="container">
	<form method="post" action="{{'/products/'.$product->id}}">
	@csrf
	@method('PUT')
		<div class="from-group row">
			<table>
				<tr>
					<td>Name</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="nama produk" value="{{$product->name}}" name="name">
						</div>
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<div class="col-sm-12">
						    <textarea class="form-control" aria-label="With textarea" name="description">{{$product->description}}</textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Purchase price</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" name="purchase_price" class="form-control" placeholder="harga beli" value="{{$product->purchase_price}}">
						</div>
					</td>
				</tr>
				<tr>
					<td>Sale price</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" name="sale_price" class="form-control" placeholder="harga jual" value="{{$product->sale_price}}">
						</div>
					</td>
				</tr>
				<tr>
					<td>Stock</td>
					<td>
						<div class="col-sm-12">
						    <input type="text" name="stock" class="form-control" placeholder="stok barang" value="{{$product->stock}}">
						</div>
					</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<div class="col-sm-12">
						    <select class="form-control" id="sel1" name="category_id">
						    	@foreach($categories as $category)
						    		@if($product->category->id == $category->id)
						    			<option selected value="{{$category->id}}">{{$category->name}}</option>
						    		@else
						    			<option value="{{$category->id}}">{{$category->name}}</option>
						    		@endif
						    	@endforeach
						    </select>
						</div>
					</td>
				</tr>
				<tr>
					<td> </td>
					<td> <button type="submit" class="btn btn-primary" style="float: right;">Edit</button></td>
				</tr>
			</table>
			
		</div><br>
	</form>
</div>			
@endsection
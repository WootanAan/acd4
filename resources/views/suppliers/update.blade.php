@extends('layouts.app')

@section('konten')
<br>
<div class="container">
	<form method="post" action="{{'/suppliers/'.$supplier->id}}">
	@csrf
	@method('PUT')
		<div class="from-group row">
			<table>
				<tr>
					<td>Nama </td>
					<td>
						<div class="col-sm-12">
						    <input type="text" class="form-control" placeholder="nama" value="{{$supplier->name}}" name="name">
						</div>
					</td>
				</tr>
				<tr>
					<td>Email </td>
					<td>
						<div class="col-sm-12">
						    <input type="email" class="form-control" placeholder="ajaro@example.com" value="{{$supplier->email}}" name="email">
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<div class="col-sm-12">
						    <textarea class="form-control" aria-label="With textarea" name="address">{{$supplier->address}}</textarea>
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
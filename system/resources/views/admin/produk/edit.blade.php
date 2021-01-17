@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
				<img src="{{url("system/public/$produk->foto")}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<div class="col-md-9">
			
			<div class="card">
				<div class="card-header">
					Ubah Data Produk
				</div>
					<div class="card-body">

					<form action="{{url('admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method("PUT")
					<div class="form-group">
						<label for="" class="control-label">Nama Produk</label>
						<input type="text" class="form-control" name="nama" id="nama" value="{{$produk->nama}}">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">Foto</label>
						<input type="file" class="form-control" name="foto" accept=".png">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">Harga Produk</label>
						<input type="text" class="form-control" name="harga" id="harga" value="{{$produk->harga}}">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">Berat Produk</label>
						<input type="text" class="form-control" name="berat" id="harga" value="{{$produk->berat}}">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">Stok Produk</label>
						<input type="text" class="form-control" name="stok" id="stok" value="{{$produk->stok}}">
					</div>
					<div class="form-group">
						<label for="" class="control-label">Deskripsi</label>
						<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
					</div>
					<button class="btn btn-dark float-right" type="submit"><i class="fa fa-save"> Simpan</i></button>

					</form>
					
				</div>	
			</div>
		</div>	
	</div>
</div>


@endsection 
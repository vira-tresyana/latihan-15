@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			
			<div class="card">
				<div class="card-header">
					Tambah Data Produk
				</div>

				<div class="card-body">
					<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
						@csrf
					
					<div class="form-group">
					<label for="" class="control-label">Nama Brand</label>
					<input type="text" class="form-control" name="brand">
					</div>

					<div class="form-group">
					<label for="" class="control-label">Nama Produk</label>
					@include('template.utils.errors', ['item' => 'nama'])
					<input type="text" class="form-control" name="nama">
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Foto</label>
								<input type="file" class="form-control" name="foto" accept=".png">
							</div>
						</div>
						<div class="col-md-3"> 
							
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								@include('template.utils.errors', ['item' => 'harga'])
								<input type="text" class="form-control" name="harga">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label for="" class="control-label">Berat</label>
							@include('template.utils.errors', ['item' => 'berat'])
							<input type="text" class="form-control" name="berat">
							</div>
							
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label for="" class="control-label">Stok</label>
							@include('template.utils.errors', ['item' => 'stok'])
							<input type="text" class="form-control" name="stok">
							</div>
						</div>
						<div class="form-group">
						    <label for="exampleFormControlSelect1">Kategori Produk</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
						      <option selected="" disabled="">Pilih Kategori</option>
						      <option value="1">Jilbab</option>
						      <option value="2">Tas</option>
						      <option value="3">Lipstik</option>
						      <option value="4">Baju</option>
						    </select>
						</div>
					</div>

					<div class="form-group">
					<label for="" class="control-label">Deskripsi</label>
					<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
					
					</div>
					<button class="btn btn-dark float-right" type="submit"><i class="fa fa-save"> Simpan</i></button>

					</form>
					
					
				</div>
				
			</div>
		</div>
		
	</div>
	
</div>


@endsection 

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
  			$('#deskripsi').summernote();
		});
	</script>
@endpush
@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			
			<div class="card">
				<div class="card-header">
					Detail Data Produk
				</div>

				<div class="card-body">
					<div class="jumbotron">
						
					<h1 class="display-5">{{$produk->nama}}</h1><hr>
						Seller : {{$produk->seller->nama}} <br>
						
					<p class="lead"><strong class="text-dark"> {{$produk->harga}} | Stok <b>{{$produk->stok}}</b> | Berat : {{$produk->berat}} gr | Tanggal Produk : {{$produk->created_at->diffForHumans()}} </strong></p>
					  <hr class="my-4">
					</p>
					<p>
						<img src="{{url("system/public/$produk->foto")}}" alt="{{$produk->foto}}" width="300">
					</p>

					<h2>Deskripsi Produk : <br>
					  	{!! nl2br($produk->deskripsi) !!}</h2>
					  <a class="btn btn-success btn-sm" href="#" role="button">Masukkan Keranjang</a>
					</p>		
				</div>		
			</div>
		</div>	
	</div>	
</div>


@endsection 
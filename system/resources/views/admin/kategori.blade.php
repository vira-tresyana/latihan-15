@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Kategori</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Jam Tangan</h5>
			        <p class="card-text text-muted">Belanja Jam Tangan Online Bebas Ribet dan Aman Hanya di VIRASHOP. Produk Dijamin Original dan Garansi. Belanja Sekarang! Jenis: Jam Tangan Pria, Jam Tangan Wanita, Jam Tangan Couple.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Sneakers</h5>
			        <p class="card-text text-muted">Beli Sneakers Original Online berkualitas dengan harga murah terbaru di VIRASHOP! Pembayaran mudah, pengiriman cepat <br> Jenis:Pria Dewasa, Wanita Dewasa, Anak-Anak.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Laptop</h5>
			        <p class="card-text text-muted">Beli Laptop Dengan Pilihan Terlengkap dan Harga Termurah. Belanja Produk Laptop Aman dan Nyaman di VIRASHOP. Pengiriman Cepat dan Terpercaya. <br> Jenis: Asus, Acer, Lenovo.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">HandPhone</h5>
			        <p class="card-text text-muted">Beli Handphone Dengan Pilihan Terlengkap dan Harga Termurah tentunya original. Belanja Produk Handphone Aman dan Nyaman di VIRASHOP. Pengiriman Cepat dan terpercaya. <br> Jenis: Iphone, Oppo, Xiomi.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection
<?php 

namespace App\Http\Controllers;

class HomeControllers extends Controller{



	function showBeranda(){
		return view('admin/beranda');

	}

	function showKategori(){
		return view('admin/produk');
	}

	function showProduk(){
		return view('admin/kategori');
	}
	function showLogin(){
		return view ('admin/login');
	}




}






 ?>
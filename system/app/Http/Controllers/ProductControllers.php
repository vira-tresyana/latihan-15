<?php 

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Provinsi;
use App\Models\Kabupaten;

class ProductControllers extends Controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = Product::all();
		return view('admin/produk/index', $data);

	}

	function create(){
		return view('admin/produk/create');

	}

	function store(){
		
		
		$produk = new Product;
		$produk->id_user = request()->user()->id;
		$produk->nama = request('nama');
		$produk->handleUploadFoto();
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->id_kategori = request('id_kategori');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		

		return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
	}

	function show(Product $product){
		$data['product'] = $produk;
		return view('admin/produk/show', $data);
		

	}

	function edit(Product $product){
		$data['product'] = $produk;
		return view('admin/produk/edit', $data);

	}

	function update(Product $product){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');

	}

	function destroy(Product $product){
		$produk->handleDelete();
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');

	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['list_produk'] = Product::whereNotIn('stok', [0])->where('nama','like', "%$nama%")->whereYear('created_at', '2020')->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		

		return view('admin/produk/index', $data);	
	}


		public function testCollection(){
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		//Sorting
		//Sort By Harga Terendah
		//dd(list_produk->sortBy('harga'));
		//Sort By Harga Tertinggi

		//Filter
		//$filtered = $list_produk->filter(function($item){
			//return $item->harga < 150000;
		//});
		//dd($filtered);

		//$sum = $list_produk->sum('stok');
		//dd($sum);

		$data['list'] = Produk::paginate(5);
		return view('test-collection', $data);

		
		dd($list_bike, $collection, $list_produk);
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
		
		
		
	}

}





 
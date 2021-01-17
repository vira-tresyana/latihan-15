<?php 

namespace App\Http\Controllers\API;

use App\Http\Controllers\controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{
	/**
	*Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		return Produk::all();
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param \Illuminate\Http\REquest $request
	* @return \Illuminate\Http\Response
	*/
	public function store()
	{
		if(request('nama') && request('harga') && request('berat') && request('deskripsi') && request('stok')){
			$produk = new Produk;
			$produk->nama = request('nama');
			$produk->harga = request('harga');
			$produk->berat = request('berat');
			$produk->deskripsi = request('deskripsi');
			$produk->stok = request('stok');
			$produk->save();

			return collect([
				'respond' => 200,
				'data' => produk
			]);

		} else {
			return collect([
				'respond' => 500,
				'message' => "Field Ada Yang Kosong"
			]);
		}
	}

	/**
	* Display the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function show($id)
	{
		$Produk = Produk::find($id);
		if($produk) {
			return collect([
				'status' => 200,
				'data' => $produk
			]);
		}
			return collect([
				'respond' => 500,
				'message' => "Produk Tidak Ditemukan"
			]);
	}

	
	public function update($id)
	{
		$Produk = Produk::find($id);
		if($produk) {
			$produk = new Produk;
			$produk->nama = request('nama') ?? $produk->nama;
			$produk->harga = request('harga') ?? $produk->harga;
			$produk->berat = request('berat') ?? $produk->berat;
			$produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
			$produk->stok = request('stok') ?? $produk->stok;
			$produk->save();

			return collect([
				'respond' => 200,
				'data' => $produk
			]);
	}
		return collect([
			'respond' => 500,
			'message' => "Produk Tidak Ditemukan"
		]);
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
			$Produk = Produk::find($id);
		if($produk) {
			$Produk->delete();
			return collect([
				'status' => 200,
				'data' => "Produk Berhasil Dihapus"
			]);
		}
		return collect([
			'respond' => 500,
			'message' => "Produk Tidak Ditemukan"
		]);
	}


}




















 ?>
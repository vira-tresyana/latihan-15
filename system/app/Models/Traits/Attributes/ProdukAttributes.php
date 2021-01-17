<?php 
namespace App\Models\Traits\Attributes;

use App\Models\User;
use Illuminate\Support\Str;

trait ProdukAttributes {



	function getHargaAttribute(){
		return  "Rp.".number_format($this->attributes['harga']);
	}

	function handleUploadFoto(){
		$this->handleDelete();
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->uuid."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save();
		}
	}

	function handleDelete(){
		$foto = $this->foto;
		if($foto){
			$path = public_path($foto);
			if(file_exists($path)){
				unlink($path);	
			}
			return true;
		}
	}

}


 ?>
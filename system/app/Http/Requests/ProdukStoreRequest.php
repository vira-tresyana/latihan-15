<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'stok' => 'required',
        ];
    }

    function messages(){
        return[
            'nama.required' => 'Field Nama Produk Wajib Diisi',
            'harga.required' => 'Field Harga Wajib Diisi',
            'berat.unique' => 'Field Berat Wajib Diisi',
            'stok.required' => 'Field Stok Wajib Diisi',
        ];
    }
}

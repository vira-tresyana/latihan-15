<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukControllers;
use App\Http\Controllers\SettingControllers;
use App\Http\Controllers\KategoriControllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientProdukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client/index');
});


Route::get('admin/beranda', [HomeControllers::class, 'showBeranda']);
Route::get('beranda/{status}',[HomeControllers:: class, 'showBeranda']);
Route::get('admin/login', [AuthControllers::class, 'showLogin']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

Route::get('setting', [SettingControllers::class, 'index']);
Route::post('setting', [SettingControllers::class, 'store']);


// Halaman Admin 
	Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukControllers::class, 'filter']);
	Route::resource('produk', ProdukControllers::class);
	Route::resource('product', ProductControllers::class);
	Route::resource('kategori', KategoriControllers::class);
	Route::resource('user', UserController::class);

	Route::get('test-collection', [ProdukControllers::class, 'test']);

});

// Halaman Client
Route::get('index', [ClientProdukController::class, 'index']);
Route::post('/filter', [ClientProdukController::class, 'filter']);
Route::get('beli/{produk}', [ClientProdukController::class, 'create']);
Route::post('beli', [ClientProdukController::class, 'store']);
Route::get('keranjang', [ClientProdukController::class, 'show']);
Route::get('keranjang/{produk}/edit', [ClientProdukController::class, 'edit']);
Route::put('keranjang/{produk}', [ClientProdukController::class, 'update']);
Route::delete('keranjang/{produk}', [ClientProdukController::class, 'destroy']);

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('test-collection', [ProdukControllers::class, 'testCollection']);
Route::get('test-ajax', [ProdukControllers::class, 'testAjax']);
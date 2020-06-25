<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'dashboardController@index');
Route::get('/costumer', 'costumerController@index');
Route::post('/costumer', 'costumerController@store');
Route::delete('/costumer/{cstm}', 'costumerController@delete');
Route::patch('/costumer/{cstm}', 'costumerController@ubah');
Route::get('/product', 'productController@index');
Route::post('/product', 'productController@store');
Route::delete('/product/{prdct}', 'productController@delete');
Route::patch('/product/{prdct}', 'productController@ubah');
Route::get('/category', 'categoryController@index');
Route::post('/category', 'categoryController@store');
Route::delete('/category/{prdct}', 'categoryController@delete');
Route::patch('/category/{prdct}', 'categoryController@ubah');
Route::get('/penjualan', 'penjualanController@index');

Route::post('/cariCostumer', 'cariCostumerController@cari');
Route::post('/cariBarang', 'cariBarangController@cari');

Route::post('/detailTran', 'detailTranController@store');


Route::get('/tes','tesController@index');
// Route::get('/tes', function () {
//         return view('tes');
//     });

Route::get('/report', 'reportController@index');
Route::delete('/desa/{des}', 'costumerController@delete');


// Route::post('/postlogin', 'AuthController@postlogin');
// Route::get('/logout', 'AuthController@logout')->middleware('auth');
// Route::get('/dashbord', 'PagesController@index')->middleware('auth');
// Route::get('/desa', 'desaController@index')->middleware('auth');
// Route::post('/desa', 'desaController@store')->middleware('auth');
// Route::get('/pegawai', 'pegawaiController@index')->middleware('auth');
// // Route::get('/aset', 'asetController@index');
// Route::get('/E-ktp', 'ektpController@index')->middleware('auth');;
// Route::delete('/desa/{des}', 'desaController@hapus')->middleware('auth');;
// Route::patch('/desa/{des}', 'desaController@ubah')->middleware('auth');;
// Route::post('/pegawai', 'pegawaiController@store')->middleware('auth');;
// Route::delete('/pegawai/{pgw}', 'pegawaiController@hapus')->middleware('auth');;
// Route::patch('/pegawai/{pgw}', 'pegawaiController@ubah')->middleware('auth');;
// Route::post('/E-ktp', 'ektpController@store')->middleware('auth');;
// Route::get('/E-ktp/{ektp}', 'ektpController@cetak_pdf')->middleware('auth');;
// Route::delete('/E-ktp/{ektp}', 'ektpController@hapus')->middleware('auth');;
Route::get('/product', 'productController@index');



// Route::post('/postlogin', 'AuthController@postlogin');
// Route::get('/logout', 'AuthController@logout')->middleware('auth');
// Route::get('/dashbord', 'PagesController@index')->middleware('auth');
// Route::get('/desa', 'desaController@index')->middleware('auth');
// Route::post('/desa', 'desaController@store')->middleware('auth');
// Route::get('/pegawai', 'pegawaiController@index')->middleware('auth');
// // Route::get('/aset', 'asetController@index');
// Route::get('/E-ktp', 'ektpController@index')->middleware('auth');;
// Route::delete('/desa/{des}', 'desaController@hapus')->middleware('auth');;
// Route::patch('/desa/{des}', 'desaController@ubah')->middleware('auth');;
// Route::post('/pegawai', 'pegawaiController@store')->middleware('auth');;
// Route::delete('/pegawai/{pgw}', 'pegawaiController@hapus')->middleware('auth');;
// Route::patch('/pegawai/{pgw}', 'pegawaiController@ubah')->middleware('auth');;
// Route::post('/E-ktp', 'ektpController@store')->middleware('auth');;
// Route::get('/E-ktp/{ektp}', 'ektpController@cetak_pdf')->middleware('auth');;
// Route::delete('/E-ktp/{ektp}', 'ektpController@hapus')->middleware('auth');;
// Route::patch('/E-ktp/{ektp}', 'ektpController@ubah')->middleware('auth');;
// Route::get('/domisili', 'domisiliController@index')->middleware('auth');;
// Route::post('/domisili', 'domisiliController@store')->middleware('auth');;
// Route::patch('/domisili/{dom}', 'domisiliController@ubah')->middleware('auth');;
// Route::get('/domisili/{dom}', 'domisiliController@cetak_pdf')->middleware('auth');;
// Route::delete('/domisili/{dom}', 'domisiliController@hapus')->middleware('auth');;
// Route::get('/keterangan-usaha', 'skuController@index')->middleware('auth');;
// Route::post('/keterangan-usaha', 'skuController@store')->middleware('auth');;
// Route::delete('/keterangan-usaha/{sku}', 'skuController@hapus')->middleware('auth');;
// Route::patch('/keterangan-usaha/{sku}', 'skuController@ubah')->middleware('auth');;
// Route::get('/keterangan-usaha/{sku}', 'skuController@cetak_pdf')->middleware('auth');;
// Route::get('/rekom', 'rekomController@index')->middleware('auth');;
// Route::post('/rekom', 'rekomController@store')->middleware('auth');;
// Route::post('/tanggung', 'tanggungController@store')->middleware('auth');;
// Route::delete('/rekom/{rekom}', 'rekomController@hapus')->middleware('auth');;
// Route::patch('/rekom/{rekom}', 'rekomController@ubah')->middleware('auth');;
// Route::patch('/tanggung/{tanggung}', 'tanggungController@ubah')->middleware('auth');;
// Route::patch('/pj/{tanggung}', 'tanggungController@ubah2')->middleware('auth');;
// Route::get('/rekom/{rekom}', 'rekomController@cetak_pdf')->middleware('auth');;
// Route::get('/APBDes', 'apbdesController@index')->middleware('auth');;
// Route::post('/berita', 'beritaController@store')->middleware('auth');;
// Route::post('/perdes', 'perdesController@store')->middleware('auth');;
// Route::post('/perkades', 'perkadesController@store')->middleware('auth');;
// Route::post('/perkadesPen', 'perkadesPenController@store')->middleware('auth');;
// Route::post('/unit', 'unitController@store')->middleware('auth');;
// Route::post('/verif', 'verifController@store')->middleware('auth');;
// Route::post('/fakta', 'faktaController@store')->middleware('auth');;
// Route::delete('/APBDes/{gab_apdes}', 'apbdesController@hapus')->middleware('auth');;
// Route::patch('/berita/{berita}', 'beritaController@ubah')->middleware('auth');;
// Route::patch('/perdes/{perdes}', 'perdesController@ubah')->middleware('auth');;
// Route::patch('/perkades/{perkades}', 'perkadesController@ubah')->middleware('auth');;
// Route::patch('/perkadesPen/{perkadesPen}', 'perkadesPenController@ubah')->middleware('auth');;
// Route::patch('/unit/{unit}', 'unitController@ubah')->middleware('auth');;
// Route::patch('/verif/{verif}', 'verifController@ubah')->middleware('auth');;
// Route::patch('/fakta/{fakta}', 'faktaController@ubah')->middleware('auth');;
// Route::get('/APBDes/{gab_apbdes}', 'apbdesController@cetak_pdf')->middleware('auth');;
// Route::get('/lpjr', 'lpjrController@index')->middleware('auth');;
// Route::post('/lpjr', 'lpjrController@store')->middleware('auth');;
// Route::delete('/lpjr/{lpjr}', 'lpjrController@hapus')->middleware('auth');;
// Route::patch('/lpjr/{lpjr}', 'lpjrController@ubah')->middleware('auth');;
// Route::get('/lpjr/{lpjr}', 'lpjrController@cetak_pdf')->middleware('auth');;
// Route::get('/aset', 'asetController@index')->middleware('auth');;
// Route::post('/aset', 'asetController@store')->middleware('auth');;
// Route::patch('/aset/{aset}', 'asetController@ubah')->middleware('auth');;
// Route::delete('/aset/{aset}', 'asetController@hapus')->middleware('auth');;
// Route::get('/aset/{aset}', 'asetController@cetak_pdf')->middleware('auth');;
// Route::get('/perkeu', 'perkeuController@index')->middleware('auth');;
// Route::post('/perkeu', 'perkeuController@store')->middleware('auth');;
// Route::delete('/perkeu/{perkeu}', 'perkeuController@hapus')->middleware('auth');;
// Route::get('/perkeu/{perkeu}', 'perkeuController@cetak_pdf')->middleware('auth');;
// Route::get('/eska', 'eskaController@index')->middleware('auth');;
// Route::post('/eska', 'eskaController@store')->middleware('auth');;
// Route::delete('/eska/{eska}', 'eskaController@hapus')->middleware('auth');;
// Route::patch('/eska/{eska}', 'eskaController@ubah')->middleware('auth');;
// Route::get('/eska/{eska}', 'eskaController@cetak_pdf')->middleware('auth');;
// Route::post('/masuk', 'PagesController@store')->middleware('auth');;
// Route::post('/keluar', 'PagesController@ubah')->middleware('auth');;
// Route::post('/rekap', 'PagesController@cetak_pdf')->middleware('auth');;
// Route::get('/rekaptoday', 'PagesController@cetak_pdf2')->middleware('auth');;



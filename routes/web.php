<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KpController;
use App\Http\Controllers\GmbController;
use App\Http\Controllers\SpnController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\KapalSewaController;
use App\Http\Controllers\MilikPribadiController;
use App\Http\Controllers\UploadgambarController;
use App\Http\Controllers\InventoriController;
use App\Http\Controllers\custGmbController;
use App\Http\Controllers\agencyController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/history_km', [HomeController::class, 'history_km']);


// Milik Pribadi
Route::get('/page_km', [MilikPribadiController::class, 'index'])->name('page.km');
Route::get('page_km/table_km', [MilikPribadiController::class, 'table_km'])->name('table.km');
Route::post('/page_km/table_km/store', [MilikPribadiController::class, 'storeTablekm'])->name('storeTablekm');
Route::post('/table_km/photo', [MilikPribadiController::class, 'storePhoto'])->name('storephoto.km');
Route::get('page_km/table_km/edit/{id}', [MilikPribadiController::class, 'editTablekm'])->name('editTablekm');
Route::post('page_km/table_km/update', [MilikPribadiController::class, 'updateTablekm'])->name('updateTablekm');
Route::delete('/table_km/hapus/{id}', [MilikPribadiController::class, 'destroy'])->name('delete.sw');//delete


// Kapal Sewa
Route::get('/page_sw', [KapalSewaController::class, 'page_sw'])->name('page.sw'); //index
Route::get('/show_sw', [KapalSewaController::class, 'show'])->name('show.sw'); //show
Route::get('page_sw/table_sw', [KapalSewaController::class, 'table_sw'])->name('table.sw'); //create
Route::post('/table_sw/store', [KapalSewaController::class, 'store'])->name('storetable.sw');//store
Route::get('/table_sw/edit_sw/{id}', [KapalSewaController::class, 'editTable'])->name('edit_sw');//edit
Route::post('/table_sw/update/{id}', [KapalSewaController::class, 'update'])->name('updatetable.sw');//update
Route::delete('/table_sw/hapus/{id}', [KapalSewaController::class, 'destroy'])->name('delete.sw');//delete

Route::get('/data-gambar', [UploadgambarController::class, 'index'])->name('data-gambar'); //index
Route::post('/simpan-gambar', [UploadgambarController::class, 'store'])->name('simpan-gambar');//store

//agency
Route::get('/agency', [AgencyController::class, 'index'])->name('agency'); //index
Route::post('/agency/store', [AgencyController::class, 'store'])->name('agencystore');
Route::get('/agency/search', [AgencyController::class, 'search'])->name('agencysearch'); 


//Vendor
Route::get('/page_sw/vendor', [VendorController::class, 'index']);
Route::get('/page.sw/vendor/table_vendor', [VendorController::class, 'create']);
Route::post('/page/vendor/store', [VendorController::class, 'store']);//store
Route::delete('/page_sw/vendor/{id}', [VendorController::class, 'destroy']);
Route::get('/page_sw/vendor_edit/{id}', [VendorController::class, 'edit'])->name('edit_vendor');
Route::post('/page/vendor/update/{id}', [VendorController::class, 'update']);


//Inventory SPN
Route::get('page_km/inventori_spn', [SpnController::class, 'inventori_spn'])->name('invspn');
Route::post('page_km/inventori_spn/store', [SpnController::class, 'store'])->name('spnstore');
Route::get('page_km/inventori_spn/cetak/{id}', [SpnController::class, 'cetakSpn'])->name('cetakspn');
Route::match(['get','post'], '/spn/edit/{id}', [SpnController::class, 'edit']);
Route::match(['get','post'], '/spn/edit/update/{id}', [SpnController::class, 'editUpdate']);
Route::get('/delete/{id}', [SpnController::class, 'delete'])->name('delete');
Route::get('carispn', [SpnController::class, 'cariSpn'])->name('carispn');

//Inventory gmb
Route::get('page_km/inventori_gmb', [GmbController::class, 'inventori_gmb'])->name('invgmb');
Route::post('page_km/inventori_gmb/store', [GmbController::class, 'store'])->name('gmbstore');
Route::match(['get','post'], '/gmb/edit/{id}', [GmbController::class, 'edit']);
Route::match(['get','post'], '/gmb/edit/update/{id}', [GmbController::class, 'editUpdate']);
Route::get('/delete/gmb/{id}', [GmbController::class, 'delete'])->name('delete');
Route::get('carigmb', [GmbController::class, 'cariGmb'])->name('carigmb');

//Customer gmb
Route::get('page_km/inventori_gmb/customergmb', [custGmbController::class, 'customer_gmb'])->name('customergmb');
Route::post('page_km/inventori_gmb/customergmb/store', [custGmbController::class, 'customergmbStore'])->name('customergmbstore');
Route::get('caricustgmb', [custGmbController::class, 'cariCustGmb'])->name('caricustgmb');

// Report inventori

Route::get('/inventoryspn', [InventoriController::class, 'indexSpnTgl'])->name('indexspntgl');
Route::get('/inventoryspn/searchDate', [InventoriController::class, 'index'])->name('inventori');
Route::get('/inventoryspn/searchListspn', [InventoriController::class, 'searchListSpn'])->name('searchlistspn');
Route::get('/inventoryspn/cetakpdf/', [InventoriController::class, 'cetakinvSpn'])->name('cetakinvspn');
Route::get('/inventoryspn/cetakexcel/', [InventoriController::class, 'cetakinvSpnExcel'])->name('cetakinvspnexcel');
Route::get('/inventorygmb', [InventoriController::class, 'indexGmb'])->name('indexgmb');
Route::get('/inventorygmb/searchDate', [InventoriController::class, 'invGmb'])->name('inventorigmb');
Route::get('/inventorygmb/searchListgbm', [InventoriController::class, 'searchListGmb'])->name('searchlistgmb');
Route::get('/inventorygmb/cetakpdf/', [InventoriController::class, 'cetakinvGmb'])->name('cetakinvgmb');
Route::get('/inventorygmb/cetakexcel/', [InventoriController::class, 'cetakinvGmbExcel'])->name('cetakinvgmbexcel');



//Data Kru
Route::get('page_km/kru', [MilikPribadiController::class, 'kru'])->name('kru');
Route::get('page_km/kru/table_kru', [MilikPribadiController::class, 'table_kru'])->name('tablekru');
Route::post('page_km/kru/table_kru/store', [MilikPribadiController::class, 'storekru'])->name('storekru');
Route::get('/page_km/table_km/reset_session/{key}', [MilikPribadiController::class, 'resetSession']);
Route::get('cari/kru', [MilikPribadiController::class, 'cariKru'])->name('carikru');


// login 
Route::get('/login', [AuthController::class, 'login']);
Route::get('/reset_password', [AuthController::class, 'reset_password']);
Route::get('/konf_email', [AuthController::class, 'konf_email']);
Route::get('/laporan_mail', [AuthController::class, 'laporan_mail']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

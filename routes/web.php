<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KpController;
use App\Http\Controllers\GmbController;
use App\Http\Controllers\KruController;
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
Route::get('/calendarpribadi',[HomeController::class, 'calenderPribadi']);  
Route::get('/calendarsewa',[HomeController::class, 'calenderSewa']);  
Route::post('/storeText',[HomeController::class, 'inputText'])->name('inputext');  
Route::get('/chart', [HomeController::class, 'chart'])->name('chart');
Route::get('/chart-bar', [HomeController::class, 'chart1'])->name('chart-bar');
Route::get('/chart-circle', [HomeController::class, 'chart2'])->name('chart-circle');
Route::get('/chart-line', [HomeController::class, 'chart3'])->name('chart-line');


// Milik Pribadi
Route::get('/page_km', [MilikPribadiController::class, 'index'])->name('page.km');
Route::get('/show_km/{id}', [MilikPribadiController::class, 'show'])->name('show.km');
Route::get('page_km/table_km', [MilikPribadiController::class, 'table_km'])->name('table.km');
Route::post('/page_km/table_km/store', [MilikPribadiController::class, 'storeTablekm'])->name('storeTablekm');
Route::post('/table_km/photo', [MilikPribadiController::class, 'storePhoto'])->name('storephoto.km');
Route::get('page_km/table_km/edit/{id}', [MilikPribadiController::class, 'editTablekm'])->name('editTablekm');
Route::post('/page_km/table_km/update/{id}', [MilikPribadiController::class, 'updateTablekm'])->name('updateTablekm');
Route::delete('/table_km/hapus/{id}', [MilikPribadiController::class, 'destroy'])->name('delete.sw');//delete
Route::post('/table_km/storebyclickkm', [MilikPribadiController::class, 'storebyclick']);
Route::get('/table_km/backkm', [UploadgambarController::class, 'backFormPribadi']);
Route::get('/table_km/delete_img/{id}', [UploadgambarController:: class, 'deleteImagekm']);
Route::get('carikm', [MilikPribadiController::class, 'carikm'])->name('carikm');
Route::get('kapalpribadiexport', [MilikPribadiController::class, 'kapalpribadiexport'])->name('kapalpribadiexport');
Route::post('kapalpribadiimport', [MilikPribadiController::class, 'kapalpribadiimport'])->name('kapalpribadiimport');

Route::get('/data-gambarkm', [UploadgambarController::class, 'indexkm'])->name('data-gambarkm'); //index
Route::post('/simpan-gambarkm', [UploadgambarController::class, 'storekm'])->name('simpan-gambarkm');//store
Route::post('/edit-gambarkm', [UploadgambarController::class, 'editkm'])->name('edit-gambarkm');//edit


// Kapal Sewa
Route::get('/page_sw', [KapalSewaController::class, 'page_sw'])->name('page.sw'); //index
Route::get('/show_sw/{id}', [KapalSewaController::class, 'show'])->name('show.sw'); //show
Route::get('page_sw/table_sw', [KapalSewaController::class, 'table_sw'])->name('table.sw'); //create
Route::post('/table_sw/store', [KapalSewaController::class, 'store'])->name('storetable.sw');//store
Route::get('/table_sw/edit_sw/{id}', [KapalSewaController::class, 'editTable'])->name('edit_sw');//edit
Route::post('/table_sw/update/{id}', [KapalSewaController::class, 'update'])->name('updatetable.sw');//update
Route::delete('/table_sw/hapus/{id}', [KapalSewaController::class, 'destroy'])->name('delete.sw');//delete
Route::post('/table_sw/storebyclick', [KapalSewaController::class, 'storebyclick']);
Route::get('/table_sw/back', [UploadgambarController::class, 'backFormSewa']);
Route::get('/table_sw/delete_img/{id}', [UploadgambarController:: class, 'deleteImage']);
Route::get('carisw', [KapalSewaController::class, 'carisw'])->name('carisw');

Route::get('/data-gambar', [UploadgambarController::class, 'index'])->name('data-gambar'); //index
Route::post('/simpan-gambar', [UploadgambarController::class, 'store'])->name('simpan-gambar');//store

//agency
Route::get('/agency', [AgencyController::class, 'index'])->name('agency'); //index
Route::post('/agency/store', [AgencyController::class, 'store'])->name('agencystore');
Route::match(['get','post'], '/agency/edit/{id}', [AgencyController::class, 'editAgency']);
Route::match(['get','post'], '/agency/edit/update/{id}', [AgencyController::class, 'updateAgency']);
Route::get('/agencyelete/{id}', [AgencyController::class, 'agencyDelete'])->name('agencyDelete');
Route::get('/agency/search', [AgencyController::class, 'search'])->name('agencysearch'); 


//Vendor
Route::get('/page_sw/vendor', [VendorController::class, 'index']);
Route::get('/page.sw/vendor/table_vendor', [VendorController::class, 'create']);
Route::post('/page/vendor/store', [VendorController::class, 'store']);//store
Route::delete('/page_sw/vendor/{id}', [VendorController::class, 'destroy']);
Route::get('/page_sw/vendor_edit/{id}', [VendorController::class, 'edit'])->name('edit_vendor');
Route::post('/page/vendor/update/{id}', [VendorController::class, 'update']);
Route::get('carivendor', [VendorController::class, 'carivendor'])->name('carivendor');


//Inventory SPN
Route::get('page_km/inventori_spn', [SpnController::class, 'inventori_spn'])->name('invspn');
Route::post('page_km/inventori_spn/store', [SpnController::class, 'store'])->name('spnstore');
Route::get('page_km/inventori_spn/cetak/{id}', [SpnController::class, 'cetakSpn'])->name('cetakspn');
Route::match(['get','post'], '/spn/edit/{id}', [SpnController::class, 'edit']);
Route::match(['get','post'], '/spn/edit/update/{id}', [SpnController::class, 'editUpdate']);
Route::get('/delete/{id}', [SpnController::class, 'delete'])->name('delete');
Route::get('carispn', [SpnController::class, 'cariSpn'])->name('carispn');

//Inventory gmb
Route::get('page_km/inventori_gbm', [GmbController::class, 'inventori_gmb'])->name('invgmb');
Route::post('page_km/inventori_gbm/store', [GmbController::class, 'store'])->name('gmbstore');
Route::match(['get','post'], '/gbm/edit/{id}', [GmbController::class, 'edit']);
Route::match(['get','post'], '/gbm/edit/update/{id}', [GmbController::class, 'editUpdate']);
Route::get('/delete/gbm/{id}', [GmbController::class, 'delete'])->name('delete');
Route::get('carigbm', [GmbController::class, 'cariGmb'])->name('carigmb');

//Customer gmb
Route::get('page_km/inventori_gbm/customergbm', [custGmbController::class, 'customer_gmb'])->name('customergmb');
Route::post('page_km/inventori_gbm/customergbm/store', [custGmbController::class, 'customer_gmb_store'])->name('customergmbstore');
Route::match(['get','post'], '/cust_gbm/edit/{id}', [custGmbController::class, 'cust_edit']);
Route::match(['get','post'], '/cust_gbm/edit/update/{id}', [custGmbController::class, 'cust_update']);
Route::get('caricustgbm', [custGmbController::class, 'cariCustGmb'])->name('caricustgmb');
Route::get('/delete/cust/{id}', [custGmbController::class, 'delete'])->name('delete');

// Report inventori
Route::get('/inventoryspn', [InventoriController::class, 'indexSpnTgl'])->name('indexspntgl');
Route::get('/inventoryspn/searchDate', [InventoriController::class, 'index'])->name('inventori');
Route::get('/inventoryspn/searchListspn', [InventoriController::class, 'searchListSpn'])->name('searchlistspn');
Route::get('/inventoryspn/cetakpdf/', [InventoriController::class, 'cetakinvSpn'])->name('cetakinvspn');
Route::get('/inventoryspn/cetakexcel/', [InventoriController::class, 'cetakinvSpnExcel'])->name('cetakinvspnexcel');
Route::get('/inventorygbm', [InventoriController::class, 'indexGmb'])->name('indexgmb');
Route::get('/inventorygbm/searchDate', [InventoriController::class, 'invGmb'])->name('inventorigmb');
Route::get('/inventorygbm/searchListgbm', [InventoriController::class, 'searchListGmb'])->name('searchlistgmb');
Route::get('/inventorygbm/cetakpdf/', [InventoriController::class, 'cetakinvGmb'])->name('cetakinvgmb');
Route::get('/inventorygbm/cetakexcel/', [InventoriController::class, 'cetakinvGmbExcel'])->name('cetakinvgmbexcel');



//Data Kru
Route::get('page_km/kru', [KruController::class, 'kru'])->name('kru');
Route::get('page_km/kru/table_kru', [KruController::class, 'table_kru'])->name('tablekru');
Route::post('page_km/kru/table_kru/store', [KruController::class, 'storekru'])->name('storekru');
Route::get('/page_km/kru/edit/{id}', [KruController::class, 'editKru'])->name('editkru');
Route::post('/page_km/kru/edit/update/{id}', [KruController::class, 'updateKru'])->name('updateKru');
Route::get('/page_km/table_km/reset_session/{key}', [KruController::class, 'resetSession']);
Route::get('cari/kru', [KruController::class, 'cariKru'])->name('carikru');
Route::delete('/table_kru/{id}', [KruController:: class, 'destroy']);


// login 
Route::get('/login', [AuthController::class, 'login']);
Route::get('/reset_password', [AuthController::class, 'reset_password']);
Route::get('/konf_email', [AuthController::class, 'konf_email']);
Route::get('/laporan_mail', [AuthController::class, 'laporan_mail']);

Auth::routes();
// untuk takedown register
// Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Print
Route::get('/print/{id}', [KapalSewaController::class, 'prnpriview']);
Route::get('/print_km/{id}', [MilikPribadiController::class, 'prnpriview']);

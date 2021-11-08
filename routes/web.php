<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MilikPribadiController;
use App\Http\Controllers\KapalSewaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KpController;
use App\Http\Controllers\SpnController;
use App\Http\Controllers\GmbController;
use App\Http\Controllers\InventoriController;
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

Route::get('/testjs', function () {
    return view('admin.inventori.testjs');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/history_km', [HomeController::class, 'history_km']);


// Milik Pribadi
Route::get('/page_km', [MilikPribadiController::class, 'index'])->name('page.km');
Route::get('page_km/table_km', [MilikPribadiController::class, 'table_km'])->name('table.km');
Route::post('/page_km/table_km/store', [MilikPribadiController::class, 'storeTablekm'])->name('storeTablekm');
Route::post('/table_km/photo', [MilikPribadiController::class, 'storePhoto'])->name('storephoto.km');
Route::get('page_km/table_km/edit/{id}', [MilikPribadiController::class, 'editTablekm'])->name('editTablekm');
Route::post('page_km/table_km/update', [MilikPribadiController::class, 'updateTablekm'])->name('updateTablekm');

Route::get('page_km/kru', [MilikPribadiController::class, 'kru'])->name('kru');
Route::get('page_km/kru/table_kru', [MilikPribadiController::class, 'table_kru'])->name('tablekru');
Route::post('page_km/kru/table_kru/store', [MilikPribadiController::class, 'storeKru'])->name('storekru');
Route::get('/page_km/table_km/reset_session/{key}', [MilikPribadiController::class, 'resetSession']);

// Kapal Sewa
Route::get('/page_sw', [KapalSewaController::class, 'page_sw'])->name('page.sw');
Route::get('page_sw/table_sw', [KapalSewaController::class, 'table_sw'])->name('table.sw');
Route::post('/table_sw/store', [KapalSewaController::class, 'store'])->name('storetable.sw');
Route::get('/table_sw/edit/{id}', [KapalSewaController::class, 'editTable'])->name('editable.sw');
Route::post('/table_sw/update', [KapalSewaController::class, 'update'])->name('updatetable.sw');
Route::get('/table_sw/hapus/{id}', [KapalSewaController::class, 'hapus']);
Route::get('page_sw/vendor', [KapalSewaController::class, 'vendor']);
Route::get('page.sw/vendor/table_vendor', [KapalSewaController::class, 'table_vendor']);


//kp
// Route::get('/page_km', [KpController::class, 'index'])->name('page.km');
// Route::get('page_km/table_km', [KpController::class, 'table_km'])->name('table.km');
// Route::post('/page_km/table_km/store', [KpController::class, 'storeTablekm'])->name('storeTablekm');

//Inventory SPN
Route::get('page_km/inventori_spn', [SpnController::class, 'inventori_spn'])->name('invspn');
Route::post('page_km/inventori_spn/store', [SpnController::class, 'store'])->name('spnstore');
Route::get('page_km/inventori_spn/cetak/{id}', [SpnController::class, 'cetakSpn'])->name('cetakspn');
Route::match(['get','post'], '/spn/edit/{id}', [SpnController::class, 'edit']);
Route::match(['get','post'], '/spn/edit/update/{id}', [SpnController::class, 'editUpdate']);
Route::get('/delete/{id}', [SpnController::class, 'delete'])->name('delete');

//Inventory gmb
Route::get('page_km/inventori_gmb', [GmbController::class, 'inventori_gmb'])->name('invgmb');
Route::post('page_km/inventori_gmb/store', [GmbController::class, 'store'])->name('gmbstore');
Route::match(['get','post'], '/gmb/edit/{id}', [GmbController::class, 'edit']);
Route::match(['get','post'], '/gmb/edit/update/{id}', [GmbController::class, 'editUpdate']);
Route::get('/delete/gmb/{id}', [GmbController::class, 'delete'])->name('delete');

//Inventory
Route::get('/inventory', [InventoriController::class, 'index'])->name('inventory');




// login 
Route::get('/login', [AuthController::class, 'login']);
Route::get('/reset_password', [AuthController::class, 'reset_password']);
Route::get('/konf_email', [AuthController::class, 'konf_email']);
Route::get('/laporan_mail', [AuthController::class, 'laporan_mail']);

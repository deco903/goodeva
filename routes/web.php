<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MilikPribadiController;
use App\Http\Controllers\KapalSewaController;
use App\Http\Controllers\AuthController;


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
    return view('welcome');
});


Route::get('/reset_pasword', function () {
    return view('admin.auth.reset_password');
});

Route::get('/konf_email', function () {
    return view('admin.auth.konf_email');
});

Route::get('/laporan_mail', function () {
    return view('admin.auth.laporan_mail');
});


Route::group(['middleware' => 'guest'], function(){

    Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('post.login');
    Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('post.register');
    Route::get('forgot_password', [AuthController::class, 'forgotPassword'])->name('forgot.password');
    Route::patch('change_password', [AuthController::class, 'changePassword'])->name('change.password');

});


Route::group(['middleware' => 'auth'], function(){ 

    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/history_km', [HomeController::class, 'history_km'])->name('history');

    // Milik Pribadi
    Route::get('/page_km', [MilikPribadiController::class, 'index'])->name('page.km');
    Route::get('/table_km', [MilikPribadiController::class, 'table_km'])->name('table.km');
    Route::post('/table_km/store', [MilikPribadiController::class, 'store'])->name('storetable.km');
    Route::get('/page_km/inventory', [MilikPribadiController::class, 'inventory'])->name('page.km.inventory');
    Route::get('/page_km/quo_km', [MilikPribadiController::class, 'quo_km'])->name('page.km.quo.km');
    Route::get('/page_km/invoice_km', [MilikPribadiController::class, 'invoice_km'])->name('page.km.invoice.km');

    // Kapal Sewa
    Route::get('/page_sw', [KapalSewaController::class, 'page_sw'])->name('page.sw');
    Route::get('/table_sw', [KapalSewaController::class, 'table_sw'])->name('table.sw');
    Route::post('/table_sw/store', [KapalSewaController::class, 'store'])->name('storetable.sw');
    Route::get('/table_sw/edit/{id}', [KapalSewaController::class, 'editTable'])->name('editable.sw');
    Route::post('/table_sw/update', [KapalSewaController::class, 'update'])->name('updatetable.sw');
    Route::get('/table_sw/hapus/{id}', [KapalSewaController::class, 'hapus']);
    Route::get('/page_sw/vendor', [KapalSewaController::class, 'vendor'])->name('page.sw.vendor.sw');
    Route::get('/page_sw/quo_sw', [KapalSewaController::class, 'quo_sw'])->name('page.sw.quo_sw');
    Route::get('/page_sw/invoice_sw', [KapalSewaController::class, 'invoice_sw'])->name('page.sw.invoice.sw');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});






// login 
// Route::get('/login', [AuthController::class, 'login']);
// Route::get('/reset_password', [AuthController::class, 'reset_password']);
// Route::get('/konf_email', [AuthController::class, 'konf_email']);
// Route::get('/laporan_mail', [AuthController::class, 'laporan_mail']);
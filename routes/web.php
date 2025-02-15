<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\website\home::class, 'index'])->name('index_home');
Route::get('/about', [App\Http\Controllers\website\about::class, 'index'])->name('index_about');
Route::get('/brightening', [App\Http\Controllers\website\brightening::class, 'index'])->name('index_brightening');
Route::get('/brightening/lihat_produk-1', [App\Http\Controllers\website\brightening::class, 'show'])->name('detail_brightening');
Route::get('/contact', [App\Http\Controllers\website\contact::class, 'index'])->name('index_contact');


Route::get('/admission/login', [App\Http\Controllers\admin\login::class, 'index'])->name('index_login');
Route::get('/admission/dashboard', [App\Http\Controllers\admin\dashboard::class, 'index'])->name('index_dashboard');
Route::get('/admission/produk', [App\Http\Controllers\admin\produk::class, 'index'])->name('index_produk');
Route::get('/admission/produk/tambah_produk', [App\Http\Controllers\admin\produk::class, 'create'])->name('input_produk');
Route::get('/admission/produk/detail_produk-1', [App\Http\Controllers\admin\produk::class, 'show'])->name('detail_produk-1');
Route::get('/admission/customer', [App\Http\Controllers\admin\customer::class, 'index'])->name('index_customer');
Route::get('/admission/customer/biodata_customer-1', [App\Http\Controllers\admin\customer::class, 'show'])->name('biodata_customer-1');

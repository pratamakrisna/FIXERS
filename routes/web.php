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

Route::get('/', function () {
    return view('user.index', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('user.about', [
        "title" => "About"
    ]);
});

Route::get('/category', function () {
    return view('user.category', [
        "title" => "Category"
    ]);
});

Route::get('/admin', function () { 
    return view('admin.home', [ 
        "title" => "Admin" 
    ]); 
});

Route::get('/admin/produk', function () {
    return view('admin.produk', [
        "title" => "Produk"
    ]);
});

Route::get('/admin/pesanan', function () {
    return view('admin.pesanan', [
        "title" => "Pesanan"
    ]);
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/admin/kelolaproduk', function () {
    return view('admin.kelolaproduk', [
        "title" => "Kelola Produk"
    ]);
});

Route::get('/admin/kelolatoko', function () {
    return view('admin.kelolatoko', [
        "title" => "Kelola Toko"
    ]);
});

Route::get('/admin/pembayaran', function () {
    return view('admin.pembayaran', [
        "title" => "Pembayaran"
    ]);
});

Route::get('/admin/laporan', function () {
    return view('admin.laporan', [
        "title" => "Laporan"
    ]);
});
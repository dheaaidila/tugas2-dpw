<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('landing/home');
});

Route::get('/home', function () {
    return view('landing/home');
});

Route::get('/collection', function () {
    return view('landing/collection');
});

Route::get('/about', function () {
    return view('landing/about');
});

Route::get('/single-page', function () {
    return view('landing/single-page');
});

Route::get('/contact', function () {
    return view('landing/contact');
});

Route::get('/admin', function () {
    return view('admin/base');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/kategori', function () {
    return view('admin/kategori');
});

Route::get('/login', function () {
    return view('landing/login');
});

Route::get('/produk', function () {
    return view('admin/produk');
});

Route::get('/promo', function () {
    return view('admin/promo');
});

Route::get('/Produk', [ProdukController::class, 'index']);
Route::get('/Produk/create', [ProdukController::class, 'create']);
Route::post('/Produk', [ProdukController::class, 'store']);
Route::get('/Produk/{Produk}', [ProdukController::class, 'show']);
Route::get('/Produk/{Produk}/edit', [ProdukController::class, 'edit']);
Route::put('/Produk/{Produk}', [ProdukController::class, 'update']);
Route::delete('/Produk/{Produk}', [ProdukController::class, 'destroy']);

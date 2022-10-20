<?php

use App\Http\Controllers\LpController;
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

Route::get('/', [LpController::class, 'index']);
Route::get('/layanan/{id}', [LpController::class, 'layanan'])->name('layanan');
Route::get('/blog', [LpController::class, 'listBlog'])->name('listBlog');
Route::get('/blog/{slug}', [LpController::class, 'detailArtikel'])->name('detailArtikel');
Route::post('/kontak-create', [LpController::class, 'pesanCreate'])->name('kontakCreate');

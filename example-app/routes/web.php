<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

Route::get('dasboard',function (){
    return view('dasboard');
})->name('dasboard');

Route::controller(BarangController::class)->prefix('barang')->group(function(){
    Route::get('','index')->name('barang');
    Route::get('tambah', 'tambah')->name('barang.tambah');
    Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('barang.edit');
    Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
});

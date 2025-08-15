<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ClasController;

// Route siswa
// Halaman utama (list siswa)
Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');

// Tambah siswa
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

// Hapus siswa
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// Detail siswa
Route::get('/siswa/show/{id}', [SiswaController::class, 'show'])->name('siswa.show');

// Edit siswa
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');

// Route class
Route::get('/clas/index', [ClasController::class, 'index'])->name('clas.index');


Route::get('/clas/create', [ClasController::class, 'create'])->name('clas.create');
Route::post('/clas/store', [ClasController::class, 'store'])->name('clas.store');

Route::get('/clas/delete/{id}', [ClasController::class, 'destroy'])->name('clas.destroy');

Route::get('/clas/edit/{id}', [ClasController::class, 'edit'])->name('clas.edit');
Route::put('/clas/update/{id}', [ClasController::class, 'update'])->name('clas.update');

Route::get('/clas/show/{id}', [ClasController::class, 'show'])->name('clas.show');

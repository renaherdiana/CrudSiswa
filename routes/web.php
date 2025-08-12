<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

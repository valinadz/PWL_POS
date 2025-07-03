<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // Tampilkan halaman user (dengan datatable)
    Route::post('/list', [UserController::class, 'list']);       // Ambil data user untuk datatables (JSON)
    Route::get('/create', [UserController::class, 'create']);    // Form tambah user
    Route::post('/', [UserController::class, 'store']);          // Simpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);        // Tampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);   // Form edit user
    Route::put('/{id}', [UserController::class, 'update']);      // Simpan perubahan user
    Route::delete('/{id}', [UserController::class, 'destroy']);  // Hapus user
=======

Route::get('/', function () {
    return view('welcome');
>>>>>>> 5d53c0df12e5cd437ea24fe360af394196482388
});

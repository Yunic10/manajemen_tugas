<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

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

Route::get('/tugas/selesai', [TugasController::class, 'show'])->name('tugas.selesai');
Route::get('/tugas/belumselesai', [TugasController::class, 'show_belum'])->name('tugas.belum');
Route::put('/tugas/{id}/status/{status}', [TugasController::class, 'set_status'])->name('tugas.set');
Route::resource('/tugas', TugasController::class);

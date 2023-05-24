<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\UlasanController;

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
Route::get('dashboard',[DashboardController::class, 'index'])->name('index');
Route::get('/pengunjung', [PengunjungController::class, 'index']);
Route::get('/ulasan', [UlasanController::class, 'index']);

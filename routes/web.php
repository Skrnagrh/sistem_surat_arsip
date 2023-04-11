<?php

use App\Models\User;
use App\Models\Masuk;
use App\Models\Keluar;
use App\Http\Controllers\DataPetugas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SemuaController;
use App\Http\Controllers\DashboardMasukController;
use App\Http\Controllers\DashboardKeluarController;

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
    return view('index');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => 'Dashboard',
        "active" => "dashboard",
        'masuk' => Masuk::all(),
        'keluar' => Keluar::all(),
        'user' => User::where('id', auth()->user()->id)->get('name'),
        'total_semua' => Masuk::all()->count() + Keluar::all()->count(),
        'total_petugas' => User::all()->count(),
        'total_masuk' => Masuk::all()->where('user_id', auth()->user()->id)->count(),
        'total_keluar' => Keluar::all()->where('user_id', auth()->user()->id)->count(),
    ]);
})->middleware('auth');

// Dashboard Surat Masuk
Route::resource('/dashboard/masuk', DashboardMasukController::class)->except('create', 'show', 'edit')->middleware('auth');
// Dashboard Surat Keluar
Route::resource('/dashboard/keluar', DashboardKeluarController::class)->except('create', 'show', 'edit')->middleware('auth');
// dashboard Profile
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

// Dashboard Semua Arsip (Masuk dan Keluar)
Route::get('/dashboard/semua', [SemuaController::class, 'index'])->middleware('auth');
Route::get('/dashboard/semua/masuk', [SemuaController::class, 'masuk'])->middleware('auth');
Route::get('/dashboard/semua/keluar', [SemuaController::class, 'keluar'])->middleware('auth');
// Buat Data Pengguna
Route::resource('/datapengguna', DataPetugas::class)->except('show', 'create')->middleware('auth');
// Buat update data pengguna
Route::patch('/penggunaupdate/{id}', [UserController::class, 'penggunaupdate'])->name('datapengguna.update');
// userprofile
Route::get('/userprofile', [UserController::class, 'index'])->name('profile.index');
Route::get('/userprofileedit', [UserController::class, 'edit'])->name('profile.edit');
Route::patch('/prof/{id}', [UserController::class, 'update'])->name('profile.update');
Route::post('/password', [UserController::class, 'password_action'])->name('password.action');

<?php

use App\Http\Controllers\KategoriArsipController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TabelArsipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LemariController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UserController;
use App\Models\Box;

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

// Route::get('/', [LandingPageController::class, 'index']) ->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class,'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class,'registration'])->name('register');
Route::post('post-registration',[AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('logout', [AuthController::class,'logout'])->name('logout');



Route::resource('pencarianarsip', TabelArsipController::class);
Route::resource('tabelarsips', TabelArsipController::class);
Route::resource('kategori', KategoriArsipController::class);
Route::resource('pegawais', PegawaiController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('rak', RakController::class);
Route::resource('box', BoxController::class);
Route::resource('lemari', LemariController::class);
Route::resource('ruangan', RuanganController::class);

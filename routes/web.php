<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\SiswaController;
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

// login
Route::get('/login', [LoginController::class,'index'])->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','admin:admin,user']], function(){
// siswa
Route::get('/siswa', [SiswaController::class,'siswa']);

Route::post('/tambahsiswa', [SiswaController::class,'storesiswa']);

Route::post('/editsiswa', [SiswaController::class,'update'])->name('update');

Route::post('/hapussiswa', [SiswaController::class,'delete'])->name('delete');


// guru
Route::get('/guru', [GuruController::class,'guru']);

Route::post('/tambahguru/store', [GuruController::class,'store']);

Route::post('/editguru', [GuruController::class,'update'])->name('updateguru');

Route::post('/hapusguru', [GuruController::class,'delete'])->name('hapusguru');

// point
Route::get('/point', [PointController::class,'point']);

Route::post('/tambahpoint/store', [PointController::class,'store']);


Route::post('/editpoint', [PointController::class,'update'])->name('updatepoint');

Route::post('/hapuspoint', [PointController::class,'delete'])->name('hapuspoint');

// kelas 
Route::get('/kelas', [KelasController::class,'kelas']);

Route::post('/tambahkelas/store', [KelasController::class,'store']);

Route::get('/hapuspoint/{id}', [KelasController::class,'delete'])->name('hapuskelas');

Route::post('/hapuskelas', [KelasController::class,'update'])->name('updatekelas');

// dashboard
Route::get('/', [DashboardController::class,'index']);

Route::post('/tambahpelanggaran/store', [DashboardController::class,'store']);

Route::post('/tambahpelanggaran/delete', [DashboardController::class,'delete'])->name('hapusdash');


});
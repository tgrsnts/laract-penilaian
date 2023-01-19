<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MengajarController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/home', [IndexController::class, 'home']);
Route::post('/login/admin', [IndexController::class, 'loginAdmin']);
Route::post('/login/siswa', [IndexController::class, 'loginSiswa']);
Route::post('/login/guru', [IndexController::class, 'loginGuru']);
Route::post('/logout', [IndexController::class, 'logout']);

Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);

    return redirect('/');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('guru', GuruController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('mapel', MapelController::class);
Route::resource('kelas', KelasController::class)->parameters([
    'kelas' => 'kelas'
]);
Route::resource('siswa', SiswaController::class);
Route::resource('mengajar', MengajarController::class);
Route::resource('nilai', NilaiController::class);

require __DIR__.'/auth.php';

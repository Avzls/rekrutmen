<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/karir', function () {
    return view('template.karir');
});

Route::get('/kelolalowongan', function () {
    return view('kelolalowongan');
});

Route::get('/tambahdatapelamar', function () {
    return view('tambahdatapelamar');
});

Route::get('/datapelamar', function () {
    return view('datapelamar');
});


Route::middleware('auth')->group(function () {
    // Route untuk menampilkan halaman dashboard setelah login
    Route::get('/tambahuser', function () {
        return view('tambahuser');
    })->name('tambahuser');
});

route::get('/redirects', [HomeController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

route::post('/tambahuser', [HomeController::class, "tambahuser"]);
route::get('/kelolauser', [UserController::class, "index"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

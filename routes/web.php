<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
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

// Route::get('/', function () {
//     return view('home.index');
// });


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/mctn', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/home', [DashboardController::class, 'index'])->name('home')->middleware('auth');
Route::get('/', [BerandaController::class, 'index'])->name('home.index');
// Route::get('/', [BerandaController::class, 'index'])->name('blog.single');
Route::get('/blog/{slug}', [BerandaController::class, 'show'])->name('blog.single');
Route::get('/blog', [BerandaController::class, 'blog'])->name('home.blog');

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth/redirect', [AuthController::class, 'redirectToProvider']);
Route::get('/google/callback', [AuthController::class, 'handleProviderCallback']);
// Rute untuk registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('registerform');
Route::post('/store', [AuthController::class, 'store'])->name('store');
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/tag', TagController::class);
    Route::post('/tag/search', [TagController::class, 'index']);
});


// Route::resource('/kategori', KategoriController::class);
// Route::resource('/post', PostController::class);

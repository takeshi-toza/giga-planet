<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameAppController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\GameAppController as AdminGameAppController;
use App\Http\Controllers\Admin\GenreController as AdminGenreController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('index');

// お問い合わせ
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
    Route::post('/complete', [ContactController::class, 'send'])->name('contact.send');
});

// Admin 認証不要
Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('/', [LoginController::class, 'adminIndex']);
    Route::get('/login', [LoginController::class, 'adminIndex'])->name('admin.index');
    Route::post('/login', [LoginController::class, 'adminLogin'])->name('admin.admin-login');
});

// Admin ログイン後
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/logout', [LoginController::class, 'adminLogout'])->name('admin.admin-logout');
    Route::get('/dashboard', [LoginController::class, 'adminDashboard'])->name('admin.admin-dashboard');
//    Route::resource('admin-app', AdminGameAppController::class, ['except' => ['show']]);
    Route::resource('admin-app', AdminGameAppController::class)->except(['show']);
    Route::resource('admin-genre', AdminGenreController::class)->except(['show']);
    Route::resource('admin-contact', AdminContactController::class)->only(['index', 'show']);
});

//Route::get('/admin/', [LoginController::class, 'adminIndex']);
//Route::get('/admin/login', [LoginController::class, 'adminIndex']);
//Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.admin-login');
//Route::get('/admin/logout', [LoginController::class, 'adminLogout'])->name('admin.admin-logout');
//Route::get('/admin/dashboard', [LoginController::class, 'adminDashboard'])->name('admin.admin-dashboard');

Route::get('/app/{app_id}', [GameAppController::class, 'show'])->name('app.index');
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/', [AdminController::class, 'postLoginAdmin'])->name('postLoginAdmin');
Route::get('logout', [AdminController::class, 'logout'])->name('logoutAdmin');
Route::get('registration', [AdminController::class, 'registration'])->name('registration');
Route::post('registration', [AdminController::class, 'postRegistration'])->name('postRegistration');

Route::prefix('back_ends')->group(function () {
    Route::get('/', [HomeController::class, 'homeAdmin'])->name('homeAdmin');
    Route::prefix('user')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('list.product');
        Route::get('/add', [ProductController::class, 'add'])->name('add.product');
        Route::post('/add', [ProductController::class, 'store'])->name('store.product');
        Route::get('/{id}/update', [ProductController::class, 'edit'])->name('edit.product');
        Route::post('/{id}/update', [ProductController::class, 'update'])->name('update.product');
        Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('delete.product');
    });
    Route::prefix('books')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('list.book');
        Route::get('/add', [BookController::class, 'add'])->name('add.book');
        Route::post('/add', [BookController::class, 'store'])->name('store.book');
        Route::get('/{id}/update', [BookController::class, 'edit'])->name('edit.book');
        Route::post('/{id}/update', [BookController::class, 'update'])->name('update.book');
        Route::get('/{id}/delete', [BookController::class, 'delete'])->name('delete.book');
    });
});
Route::prefix('front_end')->group(function () {
    Route::get('', [HomeController::class, 'homeUser'])->name('homeUser');
});

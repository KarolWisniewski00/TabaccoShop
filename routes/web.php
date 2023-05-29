<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BusketController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\OrderController;

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

//ALL
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('rule')->group(function () {
    Route::get('/', [RuleController::class, 'index'])->name('rule.index');
});

Route::prefix('policy')->group(function () {
    Route::get('/', [PolicyController::class, 'index'])->name('policy.index');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
});

Route::prefix('return')->group(function () {
    Route::get('/', [ReturnController::class, 'index'])->name('return.index');
});

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about.index');
});

Route::prefix('category')->group(function () {
    Route::get('/{url}', [CategoryController::class, 'show'])->name('category.show');
});

Route::prefix('product')->group(function () {
    Route::get('/{id}', [ProductController::class, 'show'])->name('product.show');
});

//NO LOGGED IN
Route::middleware(['AlreadyLoggedIn'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'store'])->name('store');
    Route::post('/register', [AuthController::class, 'create'])->name('create');
});

//LOGGED IN
Route::middleware(['isLoggedIn'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('account')->group(function () {
        Route::prefix('info')->group(function () {
            Route::get('/', [AccountController::class, 'index'])->name('account.info.index');
            Route::get('/edit/{slug}', [AccountController::class, 'edit'])->name('account.info.edit');
            Route::put('/update/{slug}', [AccountController::class, 'update'])->name('account.info.update');
        });

        Route::prefix('busket')->group(function () {
            Route::get('/', [BusketController::class, 'index'])->name('account.busket.index');
        });

        Route::prefix('order')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('account.order.index');
        });
    });
});

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

Route::get('/', [IndexController::class, 'index'])->name('client.index');

Route::middleware(['AlreadyLoggedIn'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('client.login');
    Route::get('/register', [AuthController::class, 'register'])->name('client.register');
    Route::post('/login', [AuthController::class, 'store'])->name('client.store');
    Route::post('/register', [AuthController::class, 'create'])->name('client.create');
});

Route::middleware(['isLoggedIn'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('client.logout');

    Route::prefix('account')->group(function () {
        Route::prefix('info')->group(function () {
            Route::get('/', [AccountController::class, 'index'])->name('client.account.info.index');
            Route::get('/edit', [AccountController::class, 'edit'])->name('client.account.info.edit');
            Route::post('/edit', [AccountController::class, 'store'])->name('client.account.info.store');
        });

        Route::prefix('busket')->group(function () {
            Route::get('/', [BusketController::class, 'index'])->name('client.account.busket.index');
        });

        Route::prefix('order')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('client.account.order.index');
        });
    });
});

Route::prefix('rule')->group(function () {
    Route::get('/', [RuleController::class, 'index'])->name('client.rule.index');
});

Route::prefix('policy')->group(function () {
    Route::get('/', [PolicyController::class, 'index'])->name('client.policy.index');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('client.contact.index');
});

Route::prefix('return')->group(function () {
    Route::get('/', [ReturnController::class, 'index'])->name('client.return.index');
});

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('client.about.index');
});

Route::prefix('category')->group(function () {
    Route::get('/{url}', [CategoryController::class, 'show'])->name('client.category.show');
});

Route::prefix('product')->group(function () {
    Route::get('/{id}', [ProductController::class, 'show'])->name('client.product.show');
});

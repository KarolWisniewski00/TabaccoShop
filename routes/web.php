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
use App\Http\Controllers\AdminController;

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
            Route::get('/show', [OrderController::class, 'show'])->name('account.order.show');
        });
    });
});

//ADMIN
Route::middleware(['AdminCheck'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        /*
        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoriesAdminController::class, 'categories'])->name('categories');
            Route::get('/new', [CategoriesAdminController::class, 'categories_new'])->name('categories_new');
            Route::post('/new', [CategoriesAdminController::class, 'categories_new_form'])->name('categories_new_form');
            Route::get('/delete/{id}', [CategoriesAdminController::class, 'categories_delete']);
            Route::get('/edit/{id}', [CategoriesAdminController::class, 'categories_edit']);
            Route::post('/edit/{id}', [CategoriesAdminController::class, 'categories_edit_form']);
        });
        Route::prefix('subcategories')->group(function () {
            Route::get('/new', [CategoriesAdminController::class, 'subcategories_new'])->name('subcategories_new');
            Route::post('/new', [CategoriesAdminController::class, 'subcategories_new_form'])->name('subcategories_new_form');
            Route::get('/delete/{id}', [CategoriesAdminController::class, 'subcategories_delete']);
            Route::get('/edit/{id}', [CategoriesAdminController::class, 'subcategories_edit']);
            Route::post('/edit/{id}', [CategoriesAdminController::class, 'subcategories_edit_form']);
        });

        Route::prefix('products')->group(function () {
            Route::get('/', [ProductsAdminController::class, 'products'])->name('products');
            Route::get('/new', [ProductsAdminController::class, 'products_new'])->name('products_new');
            Route::post('/new', [ProductsAdminController::class, 'products_new_form'])->name('products_new_form');
            Route::get('/delete/{id}', [ProductsAdminController::class, 'products_delete']);
            Route::get('/edit/{id}', [ProductsAdminController::class, 'products_edit']);
            Route::post('/edit/{id}', [ProductsAdminController::class, 'products_edit_form']);
        });

        Route::prefix('hero')->group(function () {
            Route::get('/', [HeroAdminController::class, 'hero'])->name('hero');
            Route::get('/new', [HeroAdminController::class, 'hero_new'])->name('hero_new');
            Route::post('/new', [HeroAdminController::class, 'hero_new_form'])->name('hero_new_form');
            Route::get('/delete/{id}', [HeroAdminController::class, 'hero_delete']);
            Route::get('/edit/{id}', [HeroAdminController::class, 'hero_edit']);
            Route::post('/edit/{id}', [HeroAdminController::class, 'hero_edit_form']);
        });
        Route::prefix('rules')->group(function () {
            Route::get('/', [RulesAdminController::class, 'rules'])->name('rules_admin');
            Route::get('/new', [RulesAdminController::class, 'rules_new'])->name('rules_admin_new');
            Route::post('/new', [RulesAdminController::class, 'rules_new_form'])->name('rules_admin_new_form');
            Route::get('/delete/{id}', [RulesAdminController::class, 'rules_delete']);
            Route::get('/edit/{id}', [RulesAdminController::class, 'rules_edit']);
            Route::post('/edit/{id}', [RulesAdminController::class, 'rules_edit_form']);
        });
        Route::prefix('policy')->group(function () {
            Route::get('/', [PolicyAdminController::class, 'policy'])->name('policy_admin');
            Route::get('/new', [PolicyAdminController::class, 'policy_new'])->name('policy_admin_new');
            Route::post('/new', [PolicyAdminController::class, 'policy_new_form'])->name('policy_admin_new_form');
            Route::get('/delete/{id}', [PolicyAdminController::class, 'policy_delete']);
            Route::get('/edit/{id}', [PolicyAdminController::class, 'policy_edit']);
            Route::post('/edit/{id}', [PolicyAdminController::class, 'policy_edit_form']);
        });
        Route::prefix('return')->group(function () {
            Route::get('/', [ReturnAdminController::class, 'return'])->name('return_admin');
            Route::get('/new', [ReturnAdminController::class, 'return_new'])->name('return_admin_new');
            Route::post('/new', [ReturnAdminController::class, 'return_new_form'])->name('return_admin_new_form');
            Route::get('/delete/{id}', [ReturnAdminController::class, 'return_delete']);
            Route::get('/edit/{id}', [ReturnAdminController::class, 'return_edit']);
            Route::post('/edit/{id}', [ReturnAdminController::class, 'return_edit_form']);
        });*/

    });
});
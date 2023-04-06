<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BusketController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReturnController;

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

Route::get('/',[IndexController::class,'index'])->name('index');

//AUTH
Route::get('/login',[AuthController::class,'login_page']);
Route::get('/register',[AuthController::class,'register_page']);
Route::post('/login',[AuthController::class,'login_form'])->name('login_form');
Route::post('/register',[AuthController::class,'register_form'])->name('register_form');
Route::get('/logout', [AuthController::class, 'logout']);

//PAGES DYNAMIC
Route::get('/category/{url}',[PagesController::class, 'pages']);
Route::get('/product/{id}',[ProductController::class, 'product']);

//PAGES ACCOUNT
Route::get('/account',[AccountController::class, 'account']);
Route::get('/edit',[AccountController::class, 'edit']);
Route::post('/edit',[AccountController::class, 'edit_form'])->name('edit_form');
Route::get('/busket',[BusketController::class, 'busket']);
Route::get('/history',[AccountController::class, 'history']);

//PAGES STATIC
Route::get('/rules',[RulesController::class, 'rules']);
Route::get('/policy',[PolicyController::class, 'policy']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/return',[ReturnController::class, 'return']);
Route::get('/about',[AboutController::class, 'about']);
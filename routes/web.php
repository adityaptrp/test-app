<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [AppController::class, 'home'])->name('home');

//auth
Route::prefix('/admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [CmsController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [CmsController::class, 'orders'])->name('admin.orders');
    Route::get('/orders/chart', [CmsController::class, 'ordersChart'])->name('admin.orders.chart');
});

// auth and master
Route::prefix('/admin')->middleware(['auth', 'role.master', 'verified'])->group(function () {
    // users
    Route::get('/users', [CmsController::class, 'users'])->name('admin.users');
});

// language
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// register
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Auth::routes(['register' => false, 'verify' => true, 'confirm' => false]);

// Design
Route::get('/designs/varuna', [DesignController::class, 'varuna'])->name('design.varuna');
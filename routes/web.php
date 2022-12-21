<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Auth\AdminLoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'login'])->name('admin.auth.login');
        Route::post('login', [AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
        Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.auth.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [IndexController::class, 'index'])->name('admin.dashboard');
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/category-add', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category-update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::post('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

        Route::get('/brands', [BrandController::class, 'index'])->name('admin.brands.index');
        Route::get('/brand-add', [BrandController::class, 'create'])->name('admin.brand.create');
        Route::post('/', [BrandController::class, 'store'])->name('admin.brand.store');
        Route::get('/brand-edit/{brand}', [BrandController::class, 'edit'])->name('admin.brand.edit');
        Route::post('/brand-update/{brand}', [BrandController::class, 'update'])->name('admin.brand.update');
        Route::post('/delete-brand/{brand}', [BrandController::class, 'destroy'])->name('admin.brand.delete');
    });
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

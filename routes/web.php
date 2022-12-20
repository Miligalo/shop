<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
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
    Route::get('login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.auth.login');
        Route::post('login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
        Route::post('logout', [\App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.auth.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [IndexController::class, 'index'])->name('admin.dashboard');
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/category-add', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category-update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::post('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

    });
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

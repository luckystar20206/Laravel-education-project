<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::name('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [AdminNewsController::class, 'index'])->name('index');
        Route::match(['get', 'post'], '/create', [AdminNewsController::class, 'create'])->name('create');
        Route::get('/edit/{news}', [AdminNewsController::class, 'edit'])->name('edit');
        Route::post('/update/{news}', [AdminNewsController::class, 'update'])->name('update');
        Route::delete('/destroy/{news}', [AdminNewsController::class, 'destroy'])->name('destroy');

        Route::name('categories.')
            ->prefix('categories')
            ->namespace('Categories')
            ->group(function () {
                Route::get('/', [AdminCategoriesController::class, 'index'])->name('index');
                Route::match(['get', 'post'], '/create', [AdminCategoriesController::class, 'create'])->name('create');
                Route::get('/edit/{categories}', [AdminCategoriesController::class, 'edit'])->name('edit');
                Route::post('/update/{categories}', [AdminCategoriesController::class, 'update'])->name('update');
                Route::delete('/destroy/{categories}', [AdminCategoriesController::class, 'destroy'])->name('destroy');
            });
    });

Route::name('news.')
    ->prefix('news')
    ->namespace('News')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/{news}', [NewsController::class, 'showOne'])->name('new');
        Route::name('categories.')
            ->prefix('categories')
            ->namespace('Categories')
            ->group(function () {
                Route::get('all', [CategoriesController::class, 'index'])->name('index');
                Route::get('/{idx}', [CategoriesController::class, 'category'])->name('category');
            });
    });

Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

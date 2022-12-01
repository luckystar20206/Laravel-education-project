<?php

use App\Http\Controllers\Admin\IndexController;
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
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::match(['get', 'post'], '/add', [IndexController::class, 'addNew'])->name('add');
    });

Route::name('news.')
    ->prefix('news')
    ->namespace('News')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/{idx}', [NewsController::class, 'showOne'])->where('idx', '[0-9]+')->name('new');
        Route::get('/categories', [NewsController::class, 'categories'])->name('categories');
        Route::get('/categories/{idx}', [NewsController::class, 'category'])->where('idx', '[0-9]+')->name('category');
    });

Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

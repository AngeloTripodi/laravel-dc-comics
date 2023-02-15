<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Admin\HomepageController as AdminHomeController;


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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('homepage', [AdminHomeController::class, 'homepage'])->name('homepage');
    // Route::get('/', [ComicController::class, 'index'])->name('index');
    // Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

    Route::resource('comics', ComicController::class);
});

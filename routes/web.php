<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlbumController;
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
Route::get('/', [MainController::class, 'view'])->name('main');
Route::any('/add', [AlbumController::class, 'create'])->name('album-add');

Route::middleware('auth')->group(function () {
    Route::any('/remove', [AlbumController::class, 'remove'])->name('album-remove');
    Route::any('/edit', [AlbumController::class, 'edit'])->name('album-edit');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumControllerTest;
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
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
Route::get('/', [AlbumControllerTest::class, 'index'])->name('main');
Route::middleware('auth')->group(function () {
    Route::resource('album', AlbumControllerTest::class);
});

require __DIR__.'/auth.php';

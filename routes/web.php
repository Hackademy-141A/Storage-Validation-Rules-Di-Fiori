<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PublicController;
use App\Models\Song;

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

Route::get('/', [PublicController::class,'homepage'])->name('homepage');

Route::get('/song/create', [SongController::class,'create'])->name('song.create');

Route::post('/song/store', [SongController::class, 'store'])->name('song.store');

Route::get('/song/index', [SongController::class, 'index'])->name('song.index');




Route::get('/album/create' , [AlbumController::class, 'create'])->name('album.create');
Route::POST('/album/store' , [AlbumController::class, 'store'])->name('album.store');
Route::get('/album/index' , [AlbumController::class, 'index'])->name('album.index');

Route::get('/album/show/(album)' ,[AlbumController::class, 'show'])->name('album.show');

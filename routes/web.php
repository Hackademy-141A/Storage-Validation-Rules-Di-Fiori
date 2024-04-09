<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PublicController;
use App\Models\Album;
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



Route::prefix('album')->group(function(){

Route::get('/create' , [AlbumController::class, 'create'])->name('album.create');
Route::POST('/store' , [AlbumController::class, 'store'])->name('album.store');
Route::get('/index' , [AlbumController::class, 'index'])->name('album.index');
Route::get('/show/{album}' ,[AlbumController::class, 'show'])->name('album.show');
Route::get('/edit/{album}' ,[AlbumController::class, 'edit'])->name('album.edit');
Route::put('/update/{album}' , [AlbumController::class, 'update'])->name('album.update');
Route::delete('/delete/{album}', [AlbumController::class, 'destroy'])->name('album.delete');
});
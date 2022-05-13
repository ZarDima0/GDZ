<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gdz\CreateFileController;
use App\Http\Controllers\Gdz\InstituteController;
use App\Http\Controllers\Gdz\DirectionController;
use App\Http\Controllers\Gdz\ArticleController;
use App\Http\Controllers\Gdz\FileGdzController;
use App\Http\Controllers\Gdz\UserGdzController;
use App\Http\Controllers\Cabinet\UserController;
use App\Http\Controllers\Cabinet\FileController;

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

require __DIR__ . '/auth.php';



Route::middleware('auth')->group(function () {
    Route::get('/cabinet', [UserController::class, 'index'])->name('cabinet.index');
    Route::get('/cabinet/edit/{id}', [UserController::class, 'edit'])->name('cabinet.edit');
    Route::patch('/cabinet/edit/update',[UserController::class, 'update'])->name('cabinet.update-user');
    Route::get('/cabinet/file/download/{id}', [FileController::class, 'download'])->name('cabinet.download');
    Route::get('/cabinet/file/destroy/{id}', [FileController::class, 'destroy'])->name('cabinet.destroy');
});

Route::get('/upload-file', [CreateFileController::class, 'create'])->name('create.file')->middleware('auth');
Route::get('/upload-file/index', [CreateFileController::class, 'index'])->name('index.data')->middleware('auth');
Route::post('/upload-file', [CreateFileController::class, 'upload'])->name('upload.file')->middleware('auth');
Route::get('/user/{id}', [UserGdzController::class,'create'])->name('user.create-page');
Route::get('/', [InstituteController::class,'index'])->name('institute.index');
Route::get('/{instituteSlug}', [DirectionController::class,'index'])->name('direction.index');
Route::get('/{instituteSlug}/{directionSlug}', [ArticleController::class,'index'])->name('article.index');
Route::get('/{instituteSlug}/{directionSlug}/{articleSlug}', [FileGdzController::class,'index'])->name('file.index');



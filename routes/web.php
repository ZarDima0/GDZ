<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gdz\CreateFileController;
use App\Http\Controllers\Gdz;

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

Route::get('/upload-file', [CreateFileController::class, 'create'])->name('create.file')->middleware('auth');
Route::get('/upload-file/index', [CreateFileController::class, 'index'])->name('index.data')->middleware('auth');
Route::post('/upload-file', [CreateFileController::class, 'upload'])->name('upload.file')->middleware('auth');
Route::get('/', Gdz\HomeController::class . '@index')->name('/');
Route::get('/{slug}', Gdz\HomeController::class . '@create')->name('create.direction');
Route::get('/{slug}/{slugArticle}', Gdz\DirectionController::class . '@index')->name('index.direction');
Route::get('/{slug}/{slugArticle}/{slug}', Gdz\DirectionController::class . '@create')->name('create.direction');

<?php

use Illuminate\Support\Facades\Route;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', Gdz\HomeController::class . '@index')->name('/');
Route::get('/{slug}', Gdz\HomeController::class . '@create')->name('create.direction');
Route::get('/{slug}/{slugArticle}', Gdz\DirectionController::class . '@index')->name('index.direction');
Route::get('/{slug}/{slugArticle}/{slug}', Gdz\DirectionController::class . '@create')->name('create.direction');

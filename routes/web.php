<?php

use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TextController::class, 'showMain'])->name('main');
Route::get('/list', [TextController::class, 'showPostList'])->name('show.list');
Route::post('/', [TextController::class, 'createPost']);
Route::get('/{categories}', [TextController::class, 'showPost'])->name('show.post');
Route::get('/{categories}/edit', [TextController::class, 'editPost'])->name('edit.post');
Route::patch('/{categories}', [TextController::class, 'updatedPost'])->name('update.post');
Route::delete('/{categories}', [TextController::class, 'destroyPost'])->name('destroy.post');



Auth::routes();


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

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

Route::get('/', [CharacterController::class, 'index'])->name('characters.index');
Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
Route::get('/characters/{id}', [CharacterController::class, 'show'])->name('characters.show');
Route::post('/characters/store', [CharacterController::class, 'store'])->name('characters.store');
Route::get('/characters/{id}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
Route::put('/characters/{id}', [CharacterController::class, 'update'])->name('characters.update');

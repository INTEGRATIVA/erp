<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PessoaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/pessoa',[PessoaController::class, 'index'])->name('pessoa.index');
    Route::get('/pessoa/getAll',[PessoaController::class, 'getAll'])->name('pessoa.getAll');
    Route::post('/pessoa',[PessoaController::class, 'store'])->name('pessoa.store');
    Route::delete('/pessoa/{id}',[PessoaController::class, 'destroy'])->name('pessoa.destroy');
});
require __DIR__.'/auth.php';

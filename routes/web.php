<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\MarcadorController;
use App\Http\Controllers\ExameController;
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

// Cadastro
Route::middleware('auth')->group(function () {
    Route::get('/cadastro/marcadores', [MarcadorController::class, 'index'])->name('cadastrar.marcadores');
    Route::post('/cadastro/marcadores',[MarcadorController::class, 'store']);
    Route::get('/cadastro/marcadores/getAll',[MarcadorController::class, 'getAll']);
    Route::delete('/cadastro/marcadores/{id}',[MarcadorController::class, 'destroy']);
    Route::get('/cadastro/marcadores/{id}',[MarcadorController::class, 'show']);
});

// EXAME
Route::middleware('auth')->group(function () {
    Route::get('/exame/interpretacao', [ExameController::class, 'index'])->name('exame.interpretacao');
    // Route::post('/cadastro/marcadores',[MarcadorController::class, 'store']);
    // Route::get('/cadastro/marcadores/getAll',[MarcadorController::class, 'getAll']);
    // Route::delete('/cadastro/marcadores/{id}',[MarcadorController::class, 'destroy']);
    // Route::get('/cadastro/marcadores/{id}',[MarcadorController::class, 'show']);
});


require __DIR__.'/auth.php';

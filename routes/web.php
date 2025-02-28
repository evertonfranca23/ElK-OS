<?php

use App\Http\Controllers\ElkSys\ElkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ElkController::class, 'index'])->name('elk.index');
Route::get('/elk', [ElkController::class, 'index'])->name('elk.index');

Route::get('/elk/login', [ElkController::class, 'login'])->name('elk.login');

Route::get('/elk/dashboard', [ElkController::class, 'dashboard'])->name('elk.dashboard');

Route::get('/elk/cadastroCliOs', [ElkController::class, 'cadastroCliOs'])->name('elk.cadastroCliOs');
Route::get('/elk/cadastroEmpresaOs', [ElkController::class, 'cadastroEmpresaOs'])->name('elk.cadastroEmpresaOs');

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//Tela de login
Route::get('/login', [AdminController::class, 'login'])->name('login');

//Para acessar a área administrativa (abaixo) é necessario estar autenticado.

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/financeiro', [AdminController::class, 'financeiro'])->name('admin.financeiro');

        Route::get('/produtos/{id}', [AdminController::class, 'produtos'])->name('admin.produtos');
    });
});
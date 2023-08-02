<?php

use App\Http\Controllers\app\FornecedorController;
use App\Http\Controllers\site\ContatoController;
use App\Http\Controllers\site\PrincipalController;
use App\Http\Controllers\site\SobreController;
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


Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('contato', [ContatoController::class, 'index'])->name('site.contato');
Route::resource('contato', ContatoController::class)->except('index');
Route::get('sobre', [SobreController::class, 'index'])->name('site.sobre');
Route::get('login', [PrincipalController::class, 'index'])->name('site.login');

Route::prefix('app')->group(function () {
    Route::get('clientes', [PrincipalController::class, 'index'])->name('app.clientes');
    Route::get('fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('produtos', [PrincipalController::class, 'index'])->name('app.produtos');
});

Route::fallback(function () {
    echo "A rota acessada não existe. <a href='" . route('site.index') . "'>click aqui</a> para voltar para página inicial.";
});

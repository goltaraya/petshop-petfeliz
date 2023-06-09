<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PacientController;

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
    return view('site.welcome');
})->name('site.index');


Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::prefix('/pacientes')->group(function(){
        Route::get('/', [PacientController::class, 'index'])->name('app.pacients.index');
        Route::get('/criar', [PacientController::class, 'create'])->name('app.pacients.create');
        Route::post('/', [PacientController::class, 'store'])->name('app.pacients.store');
        Route::get('/{id}', [PacientController::class, 'show'])->name('app.pacients.show');
        Route::get('/editar/{id}', [PacientController::class, 'edit'])->name('app.pacients.edit');
    });

    Route::get('/clientes', function(){ return view('app.clients'); })->name('app.clients');
});

Route::fallback(function (string $nome){
    return "Rota acessada ($nome) não existe.";
})->name('fallback');

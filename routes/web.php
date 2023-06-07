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
;

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/pacientes', [PacientController::class, 'index'])->name('app.pacients');
    Route::get('/clientes', function(){ return view('app.clients'); })->name('app.clients');
});

Route::fallback(function (string $nome){
    return "Rota acessada ($nome) não existe.";
})->name('fallback');

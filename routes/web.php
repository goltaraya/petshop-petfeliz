<?php

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

Route::get('/', function () {
    return view('site.welcome');
})->name('site.index');

Route::get('/sobre', function () {
    return view('site.about');
})->name('site.about');

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

Route::get('/servicos', function () {
    return view('site.services');
})->name('site.services');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/pacientes', function(){ return 'Pacientes'; })->name('app.pacients');
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clients');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.products');
});

Route::fallback(function (string $nome){
    return "Rota acessada ($nome) não existe.";
})->name('fallback');

<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'redirecionarLogin'])
    ->name('login');

//Login como aluno
Route::post('/login', [AuthController::class, 'autenticar'])
    ->name('login.autenticar');

Route::post('/deslogar', [AuthController::class, 'deslogar'])
    ->name('login.deslogar');



Route::get('/login/servidor', [AuthController::class, 'redirecionarLoginServidor'])
    ->name('adm.login.redirecionar');

//Login como servidor
Route::post('/login/servidor/auth', [AuthController::class, 'admAutenticar'])
    ->name('adm.login.autenticar');




Route::get('/', function () {
    return view('Home.index');
})  ->middleware('checarSessao')
    ->name('home');

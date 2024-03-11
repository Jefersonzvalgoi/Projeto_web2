<?php

use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class, 'index']);
Route::get('/cadastro',[PagesController::class, 'cadastro']);
Route::get('/home',[PagesController::class, 'home']);
Route::get('/empresa',[PagesController::class, 'empresa']);
Route::get('/edit_request',[PagesController::class, 'edit_request']);
Route::get('/perfil',[PagesController::class, 'perfil']);
Route::get('/servicos',[PagesController::class, 'servicos']);
Route::get('/solicitacao',[PagesController::class, 'solicitacao']);







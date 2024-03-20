<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\SolicitationController;
use App\Http\Controllers\UserController;
use App\Models\Solicitation;
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

Route::get('/',[UserController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegister'])->name('user.showRegister');
Route::post('/register', [UserController::class, 'register'])->name('user.register');



Route::get('/home',[PagesController::class, 'home'])->name('home')->middleware('auth');
Route::post('/home',[PagesController::class, 'home'])->name('home.auth')->middleware('auth');
Route::get('/empresa',[PagesController::class, 'empresa'])->middleware('auth');
Route::get('/servicos',[PagesController::class, 'servicos'])->middleware('auth');

Route::get('/perfil',[SolicitationController::class, 'index'])->name('solicitation.index')->middleware('auth');
Route::get('/solicitation/create',[SolicitationController::class, 'create'])->name('solicitation.create')->middleware('auth');
Route::post('/solicitation/create',[SolicitationController::class, 'store'])->name('solicitation.store')->middleware('auth');
Route::get('/solicitation/delete/{id}',[SolicitationController::class, 'destroy'])->name('solicitation.delete')->middleware('auth');
Route::get('/solicitation/edit/{id}',[SolicitationController::class, 'edit'])->name('solicitation.edit')->middleware('auth');
Route::put('/solicitation/edit/{id}',[SolicitationController::class, 'update'])->name('solicitation.update')->middleware('auth');





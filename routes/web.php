<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Mail\ContactanosMailable;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;

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


Route::get('/', HomeController::class)->name('home');

 Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
 Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
 Route::post('usuarios', [UsuarioController::class,'store'])->name('usuarios.store');
 Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
 Route::get('usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
 Route::put('usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
 Route::post('usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
 Route::get('login', [UsuarioController::class, 'showLoginForm'])->name('login');
 Route::post('/inicia-sesion', [UsuarioController::class, 'login'])->name('inicia-sesion');
 Route::get('logout', [UsuarioController::class, 'logout'])->name('logout');

 Route::view('/create',"create")->name('create');



Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');




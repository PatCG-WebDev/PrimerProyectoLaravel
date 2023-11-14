<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Mail\ContactanosMailable;
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

/*  Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
 Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
 Route::post('usuarios', [UsuarioController::class,'store'])->name('usuarios.store');
 Route::get('usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
 Route::get('usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
 Route::put('usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');

 Route::get('nosotros', [UsuarioController::class, 'nosotros'])->name('nosotros');
 Route::get('usuarios/test', [UsuarioController::class, 'test'])->name('usuarios.test');
 Route::delete('usuarios/{usuario}', [UsuarioController::class,'destroy'])->name('usuarios.destroy'); */


Route::resource('usuarios', UsuarioController::class); /* Englobamos todas las rutas anteriores en 1 sola. Pasamos por parámetros el nombre de la URL principal y el controlador que las gestiona. Este método ya se encarga de determinar que las rutas que necesitan un parámetro, ese parámetro será "usuario", que es el singular de "usuarios". Además a cada ruta le asigna un método determinado (get, post, put y delete) sin necesidad de espedificar todo eso. Todo esto porque seguimos las convenciones que establece Laravel.*/

/* Si queremos que en lugar de "create" o "edit" queremos, por ejemplo, que lo ponga en español "crear" y "editar" debemos inlcuir el siguiente código en el archivo AppServiceProvider.php de la carpeta Providers que está en la carpeta App (App\Providers\AppServiceProvider.php):

    use Illuminate\Support\Facades\Route;

    Route::resourceVerbs([
        'create'=>'crear',
        'edit'=>'editar',
    ]);

    esto dentro de la función "boot".

*/
Route::view('nosotros', 'nosotros')->name('nosotros');

/* Route::get('contactanos', function(){

    Mail::to('paticia@gmail.com')->send(new ContactanosMailable);
    return "Mensaje enviado";

})->name('contactanos'); */

Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');



<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductsController;
//---------------------------------------
//Para los formularios
use App\Http\Controllers\FormMarcaController;
//--------------------------------------
//para el carrito
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\ComputoController;
//--------------------------------------
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/registro', [LoginController::class, 'index'])->name('registro');

Route::get('/ofertas', [OfertasController::class, 'index']);

//-------------------------------------------------------------------------
Route::get('/inicio', function () {
    return view('inicio');
})->name("inicio");

Route::post('/inicio', function () {
    return view('inicio');
})->name("traslado");

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::get('/news', function () {
    return view('news');
});

//-------------------------------------------------------------------------

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');

    Route::get('/productos', [ProductsController::class, 'index'])->name('productos.index');

    Route::get('/marcas', [MarcaController::class, 'index'])->name('marcas.index');
    Route::get('/marcas/&nueva&', [FormMarcaController::class, 'index'])->name('marcas.create');
    Route::get('/marcas/{slug}', [FormMarcaController::class, 'index']);

    Route::resource('oferta', OfertaController::class);

    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/categorias/&nueva&', function () {
        return view('Forms.formCategorias');
    })->name('categorias.create');
    Route::get('/categorias/{id}', function () {
        return view('Forms.formCategorias');
    });
    Route::get('/usuarios/&nuevo&', function () {
        return view('Forms.FormUser');
    })->name('usuarios.create');

    Route::get('/usuarios/{id}', function () {
        return view('Forms.FormUser');
    });
    Route::resource('/usuarios', UsuariosController::class);
});


Route::get('/profile', [UserController::class, 'index'])->name('profile');
Route::post('/update', [UserController::class, 'update'])->name('actualizar');

//-------------------------------------------------------------------------------
//Para el carrito-Categorias
Route::get('/componentes', [ComponentesController::class, 'index']);
Route::get('/computo', [ComputoController::class, 'index']);

Route::get('/gaming', function () {
    return view('Categorias.gaming');
});
Route::get('/audio', function () {
    return view('Categorias.audio');
});
Route::get('/moviles', function () {
    return view('Categorias.moviles');
});
//-------------------------------------------------------------------------------
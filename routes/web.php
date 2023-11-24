<?php

use App\Http\Controllers\BrandsController;
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

Route::get('/brands', [BrandsController::class, 'index']);

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

Route::get('/ayuda',function(){
    return view('ayuda');
});

Route::get('/news',function(){
    return view('news');
});

//-------------------------------------------------------------------------

Route::get('/dashboard', [DashBoardController::class, 'index']);
Route::resource('productos', ProductsController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('marcas', MarcaController::class);
Route::get('/formMarca', [FormMarcaController::class, 'index']);
Route::resource('oferta', OfertaController::class);
Route::get('/profile', [UserController::class, 'index'])->name('profile');
Route::post('/update', [UserController::class, 'update'])->name('actualizar');

//-------------------------------------------------------------------------------
//Para el carrito-Categorias
Route::get('/componentes', [ComponentesController::class, 'index']);
Route::get('/computo', [ComputoController::class, 'index']);

Route::get('/gaming',function(){
    return view('Categorias.gaming');
});
Route::get('/audio',function(){
    return view('Categorias.audio');
});
Route::get('/moviles',function(){
    return view('Categorias.moviles');
});
//-------------------------------------------------------------------------------

// formulario de categoria
Route::get('/dashboard/categorias/formCategoria', function () {
    return view('Forms.formCategorias');
});

Route::get('/dashboard/categorias/formCategoria/{id}', function () {
    return view('Forms.formCategorias');
});

Route::get('/dashboard/usuarios/nuevo', function () {
    return view('Forms.FormUser');
})->name('usuarios.create');

Route::get('/dashboard/usuarios/{id}', function () {
    return view('Forms.FormUser');
});

Route::resource('/dashboard/usuarios', UsuariosController::class);

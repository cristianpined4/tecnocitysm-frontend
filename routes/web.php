<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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

Route::get('/login',[LoginController::class,'index']);

Route::get('/register',[RegisterController::class, 'index']);

Route::post('/registro', [LoginController::class,'index'])->name('registro');

Route::get('/ofertas',[OfertasController::class,'index']);

Route::get('/inicio', function () {
    return view('inicio');
})->name("inicio");

Route::post('/inicio', function () {
    return view('inicio');
})->name("traslado");

Route::get('/dashboard',[DashBoardController::class,'index']);
Route::resource('user',UserController::class);
Route::resource('productos',ProductsController::class);
Route::get('/profile', [UserController::class,'index'])->name('profile');

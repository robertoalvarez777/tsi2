<?php

use Illuminate\Support\Facades\Route;

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

Route::view("/","home")->name("home");
Route::view("/mi_lista","mi_lista")->name("mi_lista");
Route::view("/tienda","tienda")->name("tienda");
Route::view("/users","users")->name("users");
Route::view("/registrar_users","registrar_users")->name("registrar_users");
Route::view("/mostrar_users","mostrar_users")->name("mostrar_users");
Route::view("/mostrar_tienda","mostrar_tienda")->name("mostrar_tienda");
Route::view("/añadir_componentes","añadir_componentes")->name("añadir_componentes");
Route::view("/mostrar_componentes","mostrar_componentes")->name("mostrar_componentes");
Route::view("/actualizar_componente","actualizar_componente")->name("actualizar_componente");
Route::view("/actualizar_lista","actualizar_lista")->name("actualizar_lista");
Route::view("/almacenamiento","almacenamiento")->name("almacenamiento");
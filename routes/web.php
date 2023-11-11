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
    return view('app');
});
Route::get('/todo', function(){
    return view('alta');
});
Route::get('/todos', function(){
    return view('Catalogo');
});
Route::get('/buscador', function(){
    return view('Buscar');
});
Route::get('/menu', function(){
    return view('Menu');
});
Route::get('/Borrar',function(){
    return view('Borrar');
});
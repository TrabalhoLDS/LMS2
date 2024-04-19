<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfsessorController;
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
    return view('welcome');
});


// o nome da rota é home
Route::get('/home',[AdminController::class, 'index'])->name('home');

// Onde o professor vê as matérias da turma
Route::get('/materiasProf',[ProfsessorController::class, 'index'])->name('materiasProf');

// Onde o professor adiciona matérias
Route::get('/addMateria',[ProfsessorController::class, 'add'])->name('addMateria');

//Onde o professor adiciona aula/conteúdo
Route::get('/addAula',[ProfsessorController::class, 'add1'])->name('addAula');

// Onde o professor vê a matéria lecionada
Route::get('/materia',[ProfsessorController::class, 'materia'])->name('materia');

Route::get('/addMateriaADM',[AdminController::class, 'addM'])->name('addMateriaADM');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessorController;
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
Route::resource('users', UsuarioController::class);

Route::get('/materiasProf',[ProfessorController::class, 'index'])->name('materiasProf');

Route::get('/addMateria',[ProfessorController::class, 'add'])->name('addMateria');

Route::get('/addAula',[ProfessorController::class, 'add1'])->name('addAula');

Route::get('/materia',[ProfessorController::class, 'materia'])->name('materia');

Route::get('/addMateriaADM',[AdminController::class, 'addM'])->name('addMateriaADM');


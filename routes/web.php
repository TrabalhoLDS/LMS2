<?php

use App\Http\Controllers\SubjectUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\UsuarioController;
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

//rota para a pesquisa de usuários na tela do administrador
Route::get('/users/search', [AdminController::class, 'search'])->name('users.search');

Route::get('/subjects',[AdminController::class, 'show'])->name('subjects');

Route::resource('users', UsuarioController::class);

//Página de matérias do professor
Route::get('/materiasProf',[ProfessorController::class, 'index'])->name('materiasProf');

//Página onde o professor adiciona matérias
Route::get('/addMateria',[ProfessorController::class, 'add'])->name('addMateria');

//Página onde o professor adiciona aulas
Route::get('/addAula',[ProfessorController::class, 'add1'])->name('addAula');

//Página onde o professor visualiza a lista de alunos
Route::get('/boletim',[ProfessorController::class, 'boletim'])->name('boletim');

//Página onde o professor vizualiza as notas
Route::get('/notas',[ProfessorController::class, 'notas'])->name('notas');

//Página da matéria escolhida
Route::get('/materia',[ProfessorController::class, 'materia'])->name('materia');

//ADM adiciona matéria
Route::get('/addMateriaADM',[AdminController::class, 'addM'])->name('addMateriaADM');

//Professor adiciona atividade
Route::get('/addConteudo',[ProfessorController::class, 'addCont'])->name('addConteudo');

//tela de visualização de atividades
Route::get('/atvAluno',[UsuarioController::class, 'atividade'])->name('atvAluno');

//tela de visualização de atividades
Route::get('/quizAluno',[UsuarioController::class, 'quiz'])->name('quizAluno');
Route::post('/admin/store',[AdminController::class, 'store'])->name('admin.store');

Route::get('/subject',[AdminController::class, 'subject'])->name('subject');

Route::post('/subjectuser2', [SubjectUserController::class, 'store'])->name('subjectuser.vincular');

Route::get('/subjectuser', [SubjectUserController::class, 'index'])->name('subjectuser');


//rota de crud para professor contendo os metodos basicos do crud (criar, update, deletar, storage)
Route::resource('professores', 'ProfessorController');

<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\QuestionarioController;

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


//** ADM */

// o nome da rota é home
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::post('/vincular-turma-professor', [TurmaController::class, 'vincularTurmaProfessor'])->name('vincular.turma.professor');
Route::post('/vincularTurmaAluno', [TurmaController::class, 'vincularTurmaAluno'])->name('vincularTurmaAluno');
Route::get('/viewAlunoTurma', [TurmaController::class, 'viewAlunoTurma'])->name('viewAlunoTurma');

Route::get('/TurmaAprofundado', [AdminController::class, 'TurmaAprofundado'])->name('TurmaAprofundado');

// o nome da rota é home
Route::get('/viewTurma', [AdminController::class, 'viewTurma'])->name('viewTurma');

//rota para a pesquisa de usuários na tela do administrador
Route::middleware(['auth', 'admin:admin'])->group(function () {
    Route::get('/users/search', [AdminController::class, 'search'])->name('users.search');
    Route::get('/addMateria', [AdminController::class, 'add'])->name('addMateria');
    Route::get('/addMateriaADM', [AdminController::class, 'addM'])->name('addMateriaADM');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/addTurma', [AdminController::class, 'addTurma'])->name('addTurma');
    Route::get('/turmascriadas', [AdminController::class, 'turmascriadas'])->name('turmascriadas');
    Route::get('/detalhes_turma', [AdminController::class, 'detalhes_turma'])->name('detalhes_turma');
});


//*** Professor */



//Página de matérias do professor
Route::middleware(['auth', 'prof'])->group(function () {
    Route::get('/materiasProf', [ProfessorController::class, 'index'])->name('materiasProf');
    //Página onde o professor adiciona aulas
    Route::get('/addAula/{turma_id}', [ProfessorController::class, 'addAula'])->name('addAula');
    Route::post('/addAula/{turma_id}', [AulaController::class, 'adicionarAula'])->name('adicionarAula');
    //Página onde o professor adiciona aulas
    Route::get('/addAtividade/{turma_id}', [ProfessorController::class, 'addAtividade'])->name('addAtividade');
    Route::post('/addAtividade/{turma_id}', [AtividadeController::class, 'store'])->name('store');
    //Página onde o professor visualiza a lista de alunos
    Route::get('/boletim/{turma_id}', [ProfessorController::class, 'boletim'])->name('boletim');
    //Página onde o professor vizualiza as notas
    Route::get('/notas', [ProfessorController::class, 'notas'])->name('notas');
    Route::get('/addConteudo', [ProfessorController::class, 'addCont'])->name('addConteudo');
    Route::resource('professores', 'ProfessorController');
    //Página da matéria escolhidalogin
    Route::get('/materia/{turma_id}/', [ProfessorController::class, 'materia'])->name('materia');
    //Professor adiciona atividade
    Route::get('/addQuestionario/{turma_id}', [ProfessorController::class, 'addQuestionario'])->name('addQuestionario');
    //Professor adiciona questionario
    Route::get('/visualizarATV/{turma_id}', [ProfessorController::class, 'visualizarATV'])->name('visualizarATV');
    //Professor visualiza atividades e aulas
    Route::get('/detalhes_AULA/{turma_id}', [ProfessorController::class, 'detalhes_AULA'])->name('detalhes_AULA');
    //Professor visualiza detalhes aulas
    Route::get('/detalhes_ATV/{turma_id}', [ProfessorController::class, 'detalhes_ATV'])->name('detalhes_ATV');
    //Professor visualiza detalhes atividades

    Route::resource('questionarios', QuestionarioController::class);
});


//rota de crud para professor contendo os metodos basicos do crud (criar, update, deletar, storage)


Route::middleware(['auth', 'aluno:admin,user'])->group(function () {

    Route::resource('users', UsuarioController::class);
    //Rota da Atividade
    Route::get('/startQuiz', [UsuarioController::class, 'QuizAti'])->name('QuizAti');
    //tela de visualização de atividades
    Route::get('/atvAluno', [UsuarioController::class, 'atividade'])->name('atvAluno');
    //tela de visualização de atividades
    Route::get('/quizAluno', [UsuarioController::class, 'quiz'])->name('quizAluno');
});


// pagina das atividades na view contAluno

//Route::get('/contAluno', [AtividadeController::class, 'index'])->name('contAluno');
Route::get('/atividades/create', [AtividadeController::class, 'create'])->name('atividades.create');
Route::post('/atividade/store', [AtividadeController::class, 'store'])->name('atividades.store');
Route::post('/atividades/{turma_id}', [AtividadeController::class, 'store'])->name('atividades.store');
Route::post('/atividades/{id}/submit', [AtividadeController::class, 'submit'])->name('atividades.submit'); // rota das atividades no mural
Route::get('/atividades/{id}', [AtividadeController::class, 'show'])->name('atividades.show');  // rota do link de para atividades
//Route::get('/atividades', [AtividadeController::class, 'index'])->name('atividades.index');
//Route::get('/home', [AtividadeController::class, 'authenticated'])->name('home');

<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
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

//Route::get('/', function () {
   // return view('welcome');
//});

//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/sobre', 'SobreController@index')->name('sobre');
//Route::get('/modalidade', 'ModalidadeController@index')->name('modalidade');
//Route::get('/noticias', 'NoticiasController@index')->name('noticias');
//Route::get('/treino', 'TreinoController@index')->name('treino');
//Route::get('/contato', 'ContatoController@index')->name('contato');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/noticia',[NoticiasController::class, 'index'])->name('noticia');
Route::get('/treino', [TreinoController::class, 'index'])->name('treino');
Route::get( '/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
Route::get('/modalidade/musculacao', [ModalidadeController::class, 'index'])->name('modalidade.musculacao');
Route::get ('/modalida/Aerobica',[ModalidadeController::class, 'index'])->name('modalidade.aerobica');
Route::get('/modalidade/Pilates',[ModalidadeController::class, 'index'])->name('modalidade.pilates');
Route::get('/modalidade/Yoga',[ModalidadeController::class, 'index'])->name('modalidade.yoga');
Route::get('/modalidade/TreinamentoFuncional',[ModalidadeController::class, 'index'])->name('modalidade.treinamentofuncional');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

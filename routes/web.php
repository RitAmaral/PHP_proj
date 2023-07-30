<?php
//1º coisa a fazer é criar rotas
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//está aqui por default, não mexemos neste. home controller class com nome index, para ser reconhecido do outro lado chamamos name('home')
//este vai para a página home.blade.php

/*---------------------user----------------*/

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user.index'); 
//1º criamos uma rota (esta em cima) para o index, que está no home controller. Ir à página do home controller: (public function index()).

//rota para adicionar utilizador (é feito em 2 partes, adiconar e guardar): 
Route::get('/user/adicionar', [App\Http\Controllers\HomeController::class, 'create'])->name('user.create');

//rota para store/guardar utilizador: //aqui usa-se o post
Route::post('/user/adicionar', [App\Http\Controllers\HomeController::class, 'store'])->name('user.store');

//agora criamos uma nova route, get = buscar dentro da pasta user, pelo campo id. Ir depois ao home controller, e função show. colocar name('user.show'), que é a página que vamos criar.
Route::get('/user/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('user.show');

//rota para editar:
Route::get('/user/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit'); //agora vamos criar route para editar

//rota para gravar a alteração: (alteramos de get para put, porque vai colocar na base de dados, não buscar da base de dados)
Route::put('/user/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('user.update');

//rota para eliminar: aqui usamos delete
Route::delete('/user/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('user.delete');


/*---------------------empregado----------------*/

Route::get('/empregado', [App\Http\Controllers\EmpregadosController::class, 'index'])->name('empregado.index'); 

Route::get('/empregado/adicionar', [App\Http\Controllers\EmpregadosController::class, 'create'])->name('empregado.create');

//rota para store/guardar utilizador: //aqui usa-se o post
Route::post('/empregado/adicionar', [App\Http\Controllers\EmpregadosController::class, 'store'])->name('empregado.store');

//agora criamos uma nova route, get = buscar dentro da pasta user, pelo campo id. Ir depois ao home controller, e função show. colocar name('user.show'), que é a página que vamos criar.
Route::get('/empregado/{id}', [App\Http\Controllers\EmpregadosController::class, 'show'])->name('empregado.show');

//rota para editar:
Route::get('/empregado/edit/{id}', [App\Http\Controllers\EmpregadosController::class, 'edit'])->name('empregado.edit'); //agora vamos criar route para editar

//rota para gravar a alteração: (alteramos de get para put, porque vai colocar na base de dados, não buscar da base de dados)
Route::put('/empregado/update/{id}', [App\Http\Controllers\EmpregadosController::class, 'update'])->name('empregado.update');

//rota para eliminar: aqui usamos delete
Route::delete('/empregado/delete/{id}', [App\Http\Controllers\EmpregadosController::class, 'destroy'])->name('empregado.delete');

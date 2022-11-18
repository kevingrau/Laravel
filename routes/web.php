<?php

use App\Http\Controllers\FuncionarioController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('funcionario')->group(function(){
    Route::get('',[FuncionarioController::class,'index'])->name('funcionario.index');
    Route::get('/create',[FuncionarioController::class,'create'])->name('funcionario.create');
    Route::post('',[FuncionarioController::class,'store'])->name('funcionario.store');
    Route::get('/{id}',[FuncionarioController::class,'show'])->name('funcionario.show');
    Route::get('/{id}/edit',[FuncionarioController::class,'edit'])->name('funcionario.edit');
    Route::post('/{id}/update',[FuncionarioController::class,'update'])->name('funcionario.update');
    Route::get('/{id}/delete',[FuncionarioController::class,'destroy'])->name('funcionario.delete');
    
});

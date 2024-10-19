<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::any('/Register',[UserController::class,'Register'])->name('Register')->middleware('guest');
Route::any('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::any('/',[UserController::class,'home'])->name('home')->middleware('auth');
Route::post('/deconnexion',[UserController::class,'deconnexion'])->name('deconnexion')->middleware('auth');
Route::any('/ajouter',[TaskController::class,'ajouter'])->name('ajouter')->middleware('auth');
Route::any('/supprimer/{task}',[TaskController::class,'supprimer'])->name('supprimer')->middleware('auth');
Route::any('/modifier/{task}',[TaskController::class,'modifier'])->name('modifier')->middleware('auth');




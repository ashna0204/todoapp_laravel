<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TaskManager;


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


Route::get('/register',[AuthManager::class,'register'])->name('register');
Route::post('/register',[AuthManager::class,'registerPost'])->name('register.post');

Route::middleware("auth")->group(function(){
    Route::get('/',[TaskManager::class,'listTask'])->name('home');


    Route::get('/tasks/add',[TaskManager::class,'addTask'])->name('tasks.add');
     Route::post('/tasks/add',[TaskManager::class,'addTaskPost'])->name('tasks.add.post');
      Route::get('/tasks/status/{id}',[TaskManager::class,'updateTask'])->name('tasks.status.update');
        Route::get('/tasks/delete/{id}',[TaskManager::class,'deleteTask'])->name('tasks.delete');
  
});
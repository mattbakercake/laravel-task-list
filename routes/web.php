<?php

use App\Http\Controllers\TaskController;
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

//display all tasks for root uri
Route::get('/', [TaskController::class, 'index']);

//resourceful routing of tasks - defines resource routes/route names for CRUD methods
Route::resource('task', TaskController::class);

//complete a task
Route::put('/task/{id}/complete', [TaskController::class, 'complete'])->name('task.complete');  

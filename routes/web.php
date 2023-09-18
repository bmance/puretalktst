<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

//HOME PAGE ROUTE
Route::get('/', [TasksController::class,'index'])->name('tasks.index');

//REDIRECT FOR TASKS PAGE
Route::get('/tasks', [TasksController::class,'index'])->name('tasks.index');

//CREATE A TASK
Route::get('/tasks/create', [TasksController::class,'create'])->name('tasks.create');

//FORM SUBMISSION
Route::post('/tasks', [TasksController::class,'store'])->name('tasks');

//UPDATE TASK INFO
Route::patch('/tasks/{id}', [TasksController::class,'update'])->name('tasks');

//DELETE COMPLETED TASK
Route::delete('/tasks/{id}', [TasksController::class,'delete'])->name('tasks');
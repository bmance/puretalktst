<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
   //HOMEPAGE ROUTE
   public function index() {
    return view('tasks.index');
   }

   //CREATE A NEW TASK
   public function create() {
    return view('tasks.create');
   }

   //TASK DATA SUBMISSION
   public function store() {
     return request()->all(); //GET ALL SUBMITTED DATA
   }

    //1. New Homepage - Done
    //1a. Handle task submission data
    //2. Create a task
    //3. Display a task
    //4. Mark a task as completed
    //5. Categorize tasks in two areas: complete and uncompleted
    //6. Remove a task permanently

}

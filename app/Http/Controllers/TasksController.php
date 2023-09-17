<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
   //HOMEPAGE ROUTE
   public function index() {

    //RETRIEVE ALL TASKS WHEN ON FRONT PAGE
    $tasks = Task::orderBy('id', 'DESC')->get(); //RETRIEVES ALL TASKS IN DESC ORDER

    //PASS DATA TO INDEX VIEW\
    return view('tasks.index', [
        'tasks' => $tasks,
    ]);
   }

   //CREATE A NEW TASK
   public function create() {
    return view('tasks.create');
   }

   //TASK DATA SUBMISSION
   public function store() {

     $allData = request()->all(); //ALL JSON DATA FROM FORM
     
     $task = Task::create([
        'description' => request('description'),
     ]); 

     //RETURNING TO FRONT PAGE WHEN TASK IS CREATED
     return redirect('/');



   }

    //1. New Homepage - Done
    //1a. Handle task submission data
    //2. Create a task
    //3. Display a task
    //4. Mark a task as completed
    //5. Categorize tasks in two areas: complete and uncompleted
    //6. Remove a task permanently

   //return dd(); //DIE DUMP THE DATA

}

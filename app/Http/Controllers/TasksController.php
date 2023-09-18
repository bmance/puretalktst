<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
   //HOMEPAGE ROUTE
   public function index() {

    //RETRIEVE ALL TASKS WHEN ON FRONT PAGE
    $tasks = Task::orderBy('completed_at') //PLACES COMPLETED TASKS UPFRONT
        ->orderBy('id', 'DESC')//SORTS BY TASK ITEM ID ON TABLE
        ->get(); //RETRIEVES ALL TASKS IN DESC ORDER FROM SORTED LIST

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

    //4. Mark a task as completed
    public function update($id) {
        $task = Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();

        return redirect('/');
    }


    //5. Categorize tasks in two areas: complete and uncompleted
    //6. Remove a task permanently

   //return dd(); //DIE DUMP THE DATA

}

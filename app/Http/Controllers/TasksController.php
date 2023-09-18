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
        ->orderBy('created_at', 'DESC')//SORT BY DATE
        ->get(); //RETRIEVES ALL TASKS IN DESC ORDER FROM SORTED LIST

    //PASS DATA TO INDEX VIEW
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

     //FORM VALIDATION RULES
     request()->validate([
        'description' => 'required|max:200', //REQUIRED FIELD AND MAX CHAR LENGTH

     ]);
     
     $task = Task::create([
        'description' => request('description'),
     ]); 

     //RETURNING TO FRONT PAGE WHEN TASK IS CREATED
     return redirect('/');

   }

    //MARK A TASK AS COMPLETE
    public function modify($id) {
        $task = Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();

        return redirect('/');
    }

    //DELETE A TASK
    public function delete($id) {
        $task = Task::where('id', $id)->first(); //retrieve task model

        $task->delete();

        return redirect('/');
    }

    //EDIT A TASK
    public function edit($id) {
        $task = Task::find($id);
        return view('tasks.edit', compact('task')); //RETURNS TO EDIT TEMPLATE WITH TASK MODEL TO PASS DATA
    }

    //UPDATE A TASK INFORMATION
    public function update(Request $request, $id) {
        $task = Task::find($id);
        $task->description = $request->input('description');
        
        //FORM VALIDATION RULES
        request()->validate([
            'description' => 'required|max:200', //REQUIRED FIELD AND MAX CHAR LENGTH

        ]);

        $task->update();//UPDATE DATA
        return redirect('/');
    }

}

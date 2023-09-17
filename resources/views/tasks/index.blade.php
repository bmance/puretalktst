@extends('layouts.app')

@section('main')
    <h1>Task List</h1>

    //RENDER ALL TASKS AVAILABLE
    @foreach ($tasks as $task)
        <div class="task-item card">
            <div class="inner-task card-body">
                <p>{{ $task->description }}</p>
                <a href="#" class="btn btn-primary">Complete</a>
            </div>    
        </div>    
    @endforeach

    <a class="btn btn-secondary btn-block" href="/tasks/create">Add New Task</a>

@endsection
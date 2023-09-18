@extends('layouts.app')

@section('main')
    <h1>Task List</h1>

    //RENDER ALL TASKS AVAILABLE
    @foreach ($tasks as $task)
        <div class="task-item card @if($task->isComplete()) success @endif">
            <div class="inner-task card-body">

                @if($task->isComplete())

                <span class="badge badge-success" style="background-color:green;">Completed</span>

                @endif

                <p>{{ $task->description }}</p>

                @if(!$task->isComplete())
                    <form action="/tasks/{{ $task->id }}" method="POST">

                        @method('PATCH')
                        @csrf

                        <button type="submit" class="btn btn-primary">Complete</button>

                    </form>
                @endif

            </div>    
        </div>    
    @endforeach

    <a class="btn btn-secondary btn-block" style="display:block;width:100%;" href="/tasks/create">Add New Task</a>

@endsection
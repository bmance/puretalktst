@extends('layouts.app')

@section('main')
    <h1>Task List</h1>

    <!-- INDIVIDUAL TASK LAYOUT -->
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

                        <button type="submit" class="btn btn-secondary">Complete</button>

                    </form>

                @else

                <!-- DELETE ACTION -->
                <form action="/tasks/{{ $task->id }}" method="POST">

                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger" style="background-color:red;">Delete</button>

                </form>

                @endif

                <a href="{{ url('edit/'.$task->id) }}" type="submit" class="btn btn-info">Edit</a>

            </div>    
        </div>    
    @endforeach

    <a class="btn btn-primary btn-block" style="display:block;width:100%;margin:15px auto;padding:10px;" href="/tasks/create">Add New Task</a>

@endsection
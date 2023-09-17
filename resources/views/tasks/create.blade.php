@extends('layouts.app')

@section('content')
    <h1>New Task</h1>
    <form method="POST" action="/tasks">
        <div class="form-group">
            @csrf
            <label for="description">Task Description</label>
            <input class="form-control" name="description" />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Create Task" />
        </div>
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <!-- FORM ERROR CATCH DISPLAY -->
    @if($errors->any())
       <ul class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach
       </ul>
    @endif
    <!-- FORM FOR EDITING A TASK -->
    <form method="POST" action="{{ url('updated-data/'.$task->id) }}">
        @method('PUT')
        @csrf
        
        <div class="form-group">
            @csrf <!-- ENABLE CROSS SITE PROTECTION ON FORM; REQUIRED-->
            <label for="description">Task Description</label>
            <input class="form-control" value="{{ $task->description }}" name="description" />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" style="margin:15px auto;display:block;width:100%;padding:15px;" type="submit" value="Modify Task" />
        </div>
    </form>
@endsection
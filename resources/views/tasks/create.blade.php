@extends('layouts.app')

@section('content')
    <h1>New Task</h1>
    <!-- FORM ERROR CATCH DISPLAY -->
    @if($errors->any())
       <ul class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach
       </ul>
    @endif
    <!-- FORM FOR CREATING NEW TASK -->
    <form method="POST" action="/tasks">
        <div class="form-group">
            @csrf <!-- ENABLE CROSS SITE PROTECTION ON FORM; REQUIRED-->
            <label for="description">Task Description</label>
            <input class="form-control" name="description" />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Create Task" />
        </div>
    </form>
@endsection
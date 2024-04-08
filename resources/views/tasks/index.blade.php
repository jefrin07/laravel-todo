@extends('layouts.app')

@section('content')
    <h1>Todo App</h1>
    @foreach($tasks as $task)
    <div class="card mt-2 @if($task->isCompleted()) border-success @endif">
    <div class="card-body">
   <p>
    @if($task->isCompleted())
        <span class="badge badge-primary">Completed</span>
    @endif
    {{ $task -> description }}
    </p>
    @if(!$task->isCompleted())
    <form action="/tasks/{{$task->id}}" method="POST">
    @method('PATCH')
    @csrf
    <button type="submit" class="btn btn-secondary btn-lg btn-block">Complete</button>
    </form>
    @else
    <form action="/tasks/{{$task->id}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger btn-lg btn-block">Delete</button>
    </form>
    @endif
    </div>
    </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection
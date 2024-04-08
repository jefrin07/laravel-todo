@extends('layouts.app')

@section('content')
    <h1>New Task</h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
        <ul class="alert alert-danger">
            <li>{{ $error }}</li>
        </ul>
    @endforeach
    @endif
    <form method="POST" action="/tasks">
        @csrf
        <div class="form-group">
    <label for="user_id">
        User ID:
    </label>
    <input type="text" value="{{ auth()->user()->id }}" class="form-control" name="user_id" readonly/>
</div>
        <div class="form-group">
        <label for="description">
            Create 
        </label>
        <input type="text" class="form-control" name="description"/>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Add</button>
    </div>
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="text-center mb-4">Sign Up</h2>
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                    @endif

                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="email">Username:</label>
                            <input id="text" type="text" class="form-control" name="username" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                            <hr>
                        <div class="form-group mt-4">
                            <p class="mb-0">Already have an account? <a href="/" class="text-primary">Login here</a></p>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


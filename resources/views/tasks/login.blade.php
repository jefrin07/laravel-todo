@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="text-center mb-4">Login</h2>
                    @if (session('error'))
                        <div class="alert alert-danger">
                             {{ session('error') }}
                        </div>
                    @endif


                    <form method="POST" action="{{route('login')}}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" type="email" class="form-control" name="email" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                            <hr>
                        <div class="form-group mt-4">
                            <p class="mb-0">Don't have an account? <a href="/register" class="text-primary">Register here</a></p>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


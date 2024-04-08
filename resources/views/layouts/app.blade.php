<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Todo</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-danger">Todo App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    @auth
      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tasks/create">New Task</a>
      </li>
    @else()
    <li class="nav-item">
        <a class="nav-link" href="/">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Registration</a>
      </li>
    @endauth  
    </ul>
    <ul class="navbar-nav ml-auto"> <!-- Use ml-auto to push the items to the right -->
      @auth
        <li class="nav-item text-warning">
          Logged in as: {{ auth()->user()->name }}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
      @endauth
    </ul>
  </div>
</nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
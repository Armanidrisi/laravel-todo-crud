<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta name="viewport" content="width =device-width, initial-scale =1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('todo.home') }}">Todo List</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  {{ Route::currentRouteName()=='todo.home' ? 'active' : '' }}" href="{{ route('todo.home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Route::currentRouteName()=='todo.about' ? 'active' : '' }}" href="{{ route('todo.about') }}">About</a>
          </li>
        </div>
      </div>
    </nav>
    <div class="my-4">
      @yield('content')
    </div>
  </body>
</html>
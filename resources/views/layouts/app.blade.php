<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Aeroturnos App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark p-2 text-dark bg-opacity-10">
    
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Aeroturnos App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

      @if (auth()->check())
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="{{ route('login.index')}}">Log In</a> -->
          <p>Welcome <b>{{auth()->user()->name}}</b></p>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-primary text-white" aria-current="page" href="{{ route('login.destroy')}}">Logout</a>
        </li>
        @else 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login.index')}}">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-primary text-white" aria-current="page" href="{{ route('register.index')}}">Register</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
  </div>

    </nav>
    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
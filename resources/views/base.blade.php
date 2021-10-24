<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>IPT Midterm</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary p-md-2">
        <div class="container">
            <a class="navbar-brand text-white" href="/">
                CheapTalk
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link box text-light" href="/"><b>Home</b></a>
                        </li>
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link box text-light" href="/dashboard"><b>Dashboard</b></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" style="font-weight: bold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach(App\Models\Category::all() as $c)
                                    <li><a class="dropdown-item" href="/categories/{{$c->id}}">{{$c->category}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link box text-light" href="/authors"><b>Users</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link box text-light" href="/logout"><b>Logout</b></a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link box text-light" href="/login"><b>Login</b></a>
                            </li>
                            <li>
                                <a class="nav-link box text-light" href="/register"><b>Register</b></a>
                            </li>
                        @endif
                    </ul>
                </form>
            </div>
        </div>    
    </nav>

    @if (session('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{ session('Error') }}
            </div>
        </div>
    @endif
    @if (session('Message'))
        <div class="alert alert-info">
            <div class="container">
                {{ session('Message') }}
            </div>
        </div>
    @endif
    @if (session('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
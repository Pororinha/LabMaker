<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

   <!-- Fonte do Google --> 

<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
   
<!-- CSS bootstrap --> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   <!-- CSS do Sistema --> 

<link rel="stylesheet" href="/css/styles.css">
<script src="/js/scripts.js"></script>

    </head>
    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">

        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/logotemp.png" alt="IF MAKER">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/Events/Create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Estoque</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Meus Eventos</a>
                </li>
                <li class="nav-item">
                   <form action="/logout" method="POST">
                     @csrf
                     <a href="/logout" 
                     class="nav-link" 
                     onclick="event.preventDefault();
                     this.closest('form').submit();">
                     Sair
                    </a>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
                
            </ul>
        </div>
        </nav>
    </header>

<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
        </div>
    </div>
</main>
    <footer>
        <p>Techwave Fábrica de Software &copy; 2023 </p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

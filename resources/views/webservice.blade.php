
    <nav class="navbar navbar-expand-lg">
        <div class=" container-fluid">
            <a class="navbar-brand" href="/listar">EventCorp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="{{route('evento.create')}}">CrearEvento</a>
                    <a class="nav-link" href="#">Pricing</a>

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                          <li>
                            <form action="{{ route("logout") }}" method="post">
                                @csrf
                            <button class="dropdown-item text-center text-md-start" type="submit">Cerrar sesión</button>
                            </form>
                          </li>
                        </ul>

                    </li>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> Inciar sesión</a>
                    </li>
                        
                    @endguest
                </div>
            </div>
        </div>
    </nav>

<style>
.navbar{
    background-color: #afbabc;
    border-color: #c58c8c;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web service</title>
</head>
<body>
    <div class="container">

        <h1>Publicaciones</h1>
        @foreach ($posts as $post)
        <div class="panel panel-default">
            <div class="panel-body">
                 {{$post->title}}

            </div>


        </div>
            
        @endforeach
        

    </div>
    
</body>
</html>
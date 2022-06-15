
    <nav class="navbar navbar-expand-lg">
        <div class=" container-fluid">
            <a class="navbar-brand" href="/">EventCorp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
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
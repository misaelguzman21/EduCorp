@extends('layouts.main')
@section("title", "Crear Evento")

@section('content')


                        <h3 class="text-center p-4">
                            {{$evento->nombre}}
                        </h3>

                        <ul>
                            <li>
                                Nombre: <strong>{{$evento->nombre}}</strong>
                            </li>
                            <li>
                                Siglas: <strong>{{$evento->siglas}}</strong>
                            </li>
                            <li>
                                Descripcion: <strong>{{$evento->descripcion}}</strong>
                            </li>
                            <li>
                                Area: <strong>{{$evento->areas}}</strong>
                            </li>
                            <li>
                                Capacidad: <strong>{{$evento->capacidad}}</strong>
                            </li>
                            <li>
                                Duracion: <strong>{{$evento->duracion}}</strong>
                            </li>
                            <li>
                                Costo: <strong>{{$evento->costo}}</strong>
                            </li>
                            <li>
                                Localizacion: <strong>{{$evento->localizacion}}</strong>
                            </li>
                        </ul>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{route('evento.destroy',$evento)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">
                                    Borrar
                                </button>
                                </form>

                            </div>
                        </div>
    
                        



<style>

    body {
        background: #152733;
        margin-top: 20px;
    }
    
    .btn-secondary {

        margin-bottom: 3%;
    
    }
    
    footer {
    background-color: #afbabc;
    padding: 30px;
    text-align: center;
    color: #F4F7FD
    }

.form-content textarea:hover,
.form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up {
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback {
    color: #ff606e;
}

.valid-feedback {
    color: #2acc80;
}
</style>




@endsection
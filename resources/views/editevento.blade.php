@extends('layouts.main')
@section("title", "Crear Evento")

@section('content')

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center p-4">Editar Evento <i>{{$evento->nombre}}</i> </h3>
                        <form class="requires-validation" action="{{route('evento.update', $evento)}}" method="POST"  novalidate >
                            @method('put')
                            <x-evento-form-body :evento="$evento"/>
                        </form>
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    </div>
                </div>
            </div>
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
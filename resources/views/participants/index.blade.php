 @extends('layouts.main')

@section('title', "Participantes")
  
@section('content')

    <h1 class="text-center mb-4">Participantes</h1>

    <ul class="list-group w-50 mx-auto">
        
        {{--
        blade cuenta con directivas para realizar ciclos, condicionales y
        otras funcionalidades comunes de PHP.
        @forelse es una directiva especial de blade que simula un "foreach"
        combinado con un "if/else", en caso de que la estructura a recorrer
        no tenga elementos se ejecuta lo que se encuentra dentro de la 
        directiva @empty
        --}}
        @forelse($participants as $participant)

            <li class="list-group-item d-flex justify-content-between">
                {{ $participant->fullName()  }}

{{--                 <p class="mb-0">{{ $participant->fullName() }}<p>
                <span class="badge bg-info">{{ $participant->country->name }}</span> --}}
            </li>

        @empty

            <div class="alert alert-warning">
                No se encontraron autores.
            </div>

        @endforelse

    </ul>

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
    
    </style>

@endsection
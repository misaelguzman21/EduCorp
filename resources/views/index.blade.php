@extends('layouts.main')

@section('content')

<body>
    <h2>
        Eventos
    </h2>

<title>@yield('title', 'Inicio')</title>

    <div class="container">
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>
                        nombre
                    </th>
                    <th>
                        siglas
                    </th>
                    <th>
                        descripcion
                    </th>
                    <th>
                        areas
                    </th>
                    <th>
                        capacidad
                    </th>
                    <th>
                        duracion
                    </th>
                    <th>
                        costo
                    </th>
                    <th>
                        localizacion
                    </th>



                </tr>



            </thead>

            <tbody>
                
                @foreach ($eventos as $evento)
                <tr>
                    <td>
                        {{ $evento->nombre}}
                                            
                    </td>
                    <td>
                    
                        {{ $evento->siglas}}
                        
                    </td>
                    <td>
                    
                        {{ $evento->descripcion}}
                        
                    </td>
                    <td>
                    
                        {{ $evento->areas}}
                        
                    </td>
                    <td>
                    
                        {{ $evento->capacidad}}
                        
                    </td>
                    <td>
                    
                        {{ $evento->duracion}}
                        
                    </td>
                    <td>
                    
                        {{ $evento->costo}}
                        
                    </td>
                    <td>
                    
                        {{ $evento->localizacion}}
                        
                    </td>
                </tr>
            </tbody>
            @endforeach



        </table>
        
    </div>


</body>




@endsection
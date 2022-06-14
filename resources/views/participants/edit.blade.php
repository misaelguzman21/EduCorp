{{-- @extends('layouts.main')


@section("pageTitle", "Editar Autor")

@section("mainContent")
 --}}
 @extends('.navbar')
 @section('content')
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <h1 class="text-center mb-4" >Editar Participante</h1>

    <form 
        {{--
        la función helper "url" genera una URL abosoluta calculando
        el dominio automáticamente.
        Recibe el path que irá después del dominio y, opcionalmente,
        un arreglo con los parámetros a pasar a la URL en el caso de
        que la ruta declarada el "/routes/web.php" se haya configurado
        para recibir parámetros.   
        --}}
{{--         action="{{ route("participants.edit", ["participant" => $participant["id"]]) }}"  --}}
        action="<?php echo(url("participants/edit", ["id" => $participant["id"]])); ?>" 
        method="post" 
        id="newParticipantForm" 
        class="mx-auto mt-sm-5"
    >

        {{--
        Este es una directiva de blade que sirve para generar un token 
        CSRF para evitar ataques de este tipo
        --}}
        @csrf

        {{-- Esto sobreescribe el método del formulario --}}
{{--         @method('PUT') --}}

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input 
                type="text" 
                class="form-control" 
                id="nombre" 
                name="nombre" 
                value="{{ $participant['nombre'] }}"
                required 
            />
        </div>

        <div class="form-group mb-3">
            <label for="apellido_p">Apellido Paterno</label>
            <input 
                type="text" 
                class="form-control" 
                id="apellido_p" 
                name="apellido_p" 
                value="{{ $participant['apellido_p'] }}"
                required 
            />
        </div>


        <div class="form-group mb-3">
            <label for="apellido_m">Apellido Materno</label>
            <input 
                type="text" 
                class="form-control" 
                id="apellido_m" 
                name="apellido_m" 
                value="{{ $participant['apellido_m'] }}"
                required 
            />
        </div>

        <div class="form-group mb-3">
            <label for="empresa">Empresa</label>
            <input 
                type="text" 
                class="form-control" 
                id="empresa" 
                name="empresa" 
                value="{{ $participant['empresa'] }}"
                required 
            />
        </div>

        <div class="form-group mb-3">
            <label for="edad">Edad</label>
            <input 
                type="text" 
                class="form-control" 
                id="edad" 
                name="edad" 
                value="{{ $participant['edad'] }}"
                required 
            />
        </div>
        <div class="form-group mb-3">
            <label for="estado">Estado</label>
            <input 
                type="text" 
                class="form-control" 
                id="estado" 
                name="estado" 
                value="{{ $participant['estado'] }}"
                required 
            />
        </div>
        <div class="form-group mb-3">
            <label for="email">Correo electrónico</label>
            <input 
                type="text" 
                class="form-control" 
                id="email" 
                name="email" 
                value="{{ $participant['email'] }}"
                required 
            />
        </div>

        <div class="form-group mb-3">
            <label for="telefono">Teléfono</label>
            <input 
                type="text" 
                class="form-control" 
                id="telefono" 
                name="telefono" 
                value="{{ $participant['telefono'] }}"
                required 
            />
        </div>
{{--         <div class="form-group mb-3">
            <label for="country">Estado</label>
        
            <select class="form-select w-50" id="country" name="country" required>

                @foreach($countries as $id => $country)

                    <option 
                        value="{{ $id }}"
                        {{-- 
                        la directiva @selected despliega el texto "selected" sí y solo
                        sí se cumple la condición que está dentro de ella
                        --}}
{{--                         @selected($author["country_id"] === intval($id))
                    >
                        {{ $country }}
                    </option>

                @endforeach
               
            </select>
        
        </div>  --}}

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </form>
@endsection 

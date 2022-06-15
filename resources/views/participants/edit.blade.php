@extends('layouts.main')
@section("title", "Editar Participante")

@section("content")

<div class="container">
    <div class="row">
        <h1 class="text-center p-4" >Editar Participante</h1>

        <form 
            action="{{ route("participants.update", ["participant" => $participant["id"]])}}" 
            method="post" 
            id="newParticipantForm" 
            class="mx-auto mt-sm-5"
        >

            @csrf

            {{-- Esto sobreescribe el método del formulario --}}
            @method('PUT')

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

            <div class="form-group mt-4 text-center">
                <button type="submit" class="btn btn-secondary">Guardar</button>
            </div>

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

</style>
@endsection 
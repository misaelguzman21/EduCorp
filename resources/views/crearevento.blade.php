@extends('layouts.main')
@section("title", "Crear Evento")

@section('content')

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center p-4">Crear Evento</h3>
                        <form class="requires-validation" action="{{route('evento.store')}}" method="POST"  novalidate >
                            @csrf

                            <div class="col-md-12">
                                <label for="nombre">Nombre de Evento</label>
                                <input class="form-control" type="text" name="nombre" id="InputNombre" value="{{ old('nombreevento')}}" placeholder="Nombre" required>
                                <div class="valid-feedback">Nombre de Evento</div>
                                <div class="invalid-feedback">Ingrese un Nombre</div>
                            </div>
                            <div class="col-md-12">
                                <label for="siglas">Siglas de Evento</label>
                                <input class="form-control" type="text" name="siglas" value="{{ old('siglas')}}" placeholder="Siglas del evento"
                                    required>
                                <div class="valid-feedback">Siglas del Evento</div>
                                <div class="invalid-feedback">Ingrese las siglas</div>
                            </div>

                            <div class="col-md-12">
                                <label for="descripcion">Descripción de Evento</label>
                                <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion')}}" placeholder="Descripcion"
                                    required>
                                <div class="valid-feedback">Descripcion</div>
                                <div class="invalid-feedback">Ingresa la Descripcion</div>
                            </div>

                            <div class="col-md-12">
                                <label for="areas">Área de capacitación</label>
                                <select class="form-select mt-3" required name="areas" id="SelectArea" >
                                    <option selected disabled value="">Areas</option>
                                    <option value="jweb">Junior Web Developer</option>
                                    <option value="sweb">Senior Web Developer</option>
                                    <option value="pmanager">Project Manager</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                                <script>
                                    document.getElementById('SelectArea').value = "old('area')";
                                </script>
                            </div>
                            <div class="col-md-12">
                                <label for="capacidad">Capacidad</label>
                                <input class="form-control" type="number" name="capacidad" value="{{ old('capacidad')}}" placeholder="Capacidad"
                                    required>
                                <div class="valid-feedback">Capacidad</div>
                                <div class="invalid-feedback">Ingresa la capacidad</div>
                            </div>
                            <div class="col-md-12">
                                <label for="duracion">Duración de Evento</label>
                                <input class="form-control" type="number" name="duracion" value="{{ old('duracion')}}" placeholder="Duracion"
                                    required>
                                <div class="valid-feedback">Duracion</div>
                                <div class="invalid-feedback">Ingresa el consto</div>
                            </div>
                            <div class="col-md-12">
                                <label for="costo">Costo de Evento</label>
                                <input class="form-control" type="number" name="costo" value="{{ old('costo')}}" placeholder="Costo" required>
                                <div class="valid-feedback">Costo</div>
                                <div class="invalid-feedback">Ingresa el consto</div>
                            </div>
                            <div class="col-md-12">
                                <label for="localizacion">Localización de Evento</label>
                                <input class="form-control" type="text" name="localizacion" value="{{ old('localizacion')}}" placeholder="Locaclizacion"
                                    required>
                                <div class="valid-feedback">Localizacion</div>
                                <div class="invalid-feedback">Ingresa la Localizacion</div>
                            </div>



                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Guardar</button>
                            </div>
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
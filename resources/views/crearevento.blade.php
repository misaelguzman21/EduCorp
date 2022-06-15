@extends('layouts.main')
@section("title", "Crear Evento")

@section('content')

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center p-4">Crear Evento</h3>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                                <label for="name">Nombre de Evento</label>
                                <input class="form-control" type="text" name="name" placeholder="Nombre" required>
                                <div class="valid-feedback">Nombre de Evento</div>
                                <div class="invalid-feedback">Ingrese un Nombre</div>
                            </div>
                            <div class="col-md-12">
                                <label for="siglas">Siglas de Evento</label>
                                <input class="form-control" type="text" name="siglas" placeholder="Siglas del evento"
                                    required>
                                <div class="valid-feedback">Siglas del Evento</div>
                                <div class="invalid-feedback">Ingrese las siglas</div>
                            </div>

                            <div class="col-md-12">
                                <label for="descripcion">Descripción de Evento</label>
                                <input class="form-control" type="text" name="descripcion" placeholder="Descripcion"
                                    required>
                                <div class="valid-feedback">Descripcion</div>
                                <div class="invalid-feedback">Ingresa la Descripcion</div>
                            </div>

                            <div class="col-md-12">
                                <label for="area">Área de capacitación</label>
                                <select class="form-select mt-3" required>
                                    <option selected disabled value="">Areas</option>
                                    <option value="jweb">Junior Web Developer</option>
                                    <option value="sweb">Senior Web Developer</option>
                                    <option value="pmanager">Project Manager</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                            </div>
                            <div class="col-md-12">
                                <label for="capacidad">Capacidad </label>
                                <input class="form-control" type="number" name="capacidad" placeholder="Capacidad"
                                    required>
                                <div class="valid-feedback">Capacidad</div>
                                <div class="invalid-feedback">Ingresa la capacidad</div>
                            </div>
                            <div class="col-md-12">
                                <label for="duración">Duración de Evento</label>
                                <input class="form-control" type="number" name="duracion" placeholder="Duracion"
                                    required>
                                <div class="valid-feedback">Duracion</div>
                                <div class="invalid-feedback">Ingresa el consto</div>
                            </div>
                            <div class="col-md-12">
                                <label for="costo">Costo de Evento</label>
                                <input class="form-control" type="number" name="costo" placeholder="Costo" required>
                                <div class="valid-feedback">Costo</div>
                                <div class="invalid-feedback">Ingresa el consto</div>
                            </div>
                            <div class="col-md-12">
                                <label for="localización">Localizacion de Evento</label>
                                <input class="form-control" type="text" name="localizacion" placeholder="Locaclizacion"
                                    required>
                                <div class="valid-feedback">Localizacion</div>
                                <div class="invalid-feedback">Ingresa la Localizacion</div>
                            </div>



                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">Confirma que todos los datos son correctos</label>
                                <div class="invalid-feedback">Porfavor confirma que todos los datos son correctos!
                                </div>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
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
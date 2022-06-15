@extends('layouts.main')
@section("title", "Crear Evento")

@section('content')

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center p-4">Crear Participante</h3>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                                <label for="name">Nombre de Partipante</label>
                                <input class="form-control" type="text" name="name" placeholder="Nombre de Evento" required>
                                <div class="valid-feedback">Nombre de Participante</div>
                                <div class="invalid-feedback">Ingrese un Nombre</div>
                            </div>
                            <div class="col-md-12">
                                <label for="apellidop">Apellido Paterno</label>
                                <input class="form-control" type="text" name="apellidop" placeholder="Apellido Paterno" required>
                                <div class="valid-feedback">ApellidoP</div>
                                <div class="invalid-feedback">Ingresa apellido</div>
                            </div>
                            <div class="col-md-12">
                                <label for="apellidop">Apellido Materno</label>
                                <input class="form-control" type="text" name="apellidom" placeholder="Apellido Materno" required>
                                <div class="valid-feedback">ApellidoM</div>
                                <div class="invalid-feedback">Ingresa apellido</div>
                            </div>
                            <div class="col-md-12">
                                <label for="empresa">Empresa</label>
                                <input class="form-control" type="text" name="empresa" placeholder="Empresa"
                                    required>
                                <div class="valid-feedback">Empresa</div>
                                <div class="invalid-feedback">Ingresa la Empresa</div>
                            </div>
                            <div class="col-md-12">
                                <label for="estado">Estado</label>
                                <input class="form-control" type="text" name="estado" placeholder="Estado"
                                    required>
                                <div class="valid-feedback">Estado</div>
                                <div class="invalid-feedback">Ingresa su Estado</div>
                            </div>
                            <div class="col-md-12">
                                <label for="email">Correo electrónico</label>
                                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <label for="edad">Edad</label>
                                <input class="form-control" id="edad" type="number" name="Edad" placeholder="Edad"
                                    required>
                                <div class="valid-feedback">Edad</div>
                                <div class="invalid-feedback">Ingresa la Edad</div>
                            </div>

                            <div class="col-md-12">
                                <label for="telefono">Teléfono</label>
                                <input class="form-control" id="tel" type="number" name="telefono" placeholder="Telefono"
                                    required>
                                <div class="valid-feedback">Telefono</div>
                                <div class="invalid-feedback">Ingresa el Telefono</div>
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
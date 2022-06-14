@extends('.navbar')

@section('content')

<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Crear Evento</h3>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Nombre" required>
                                <div class="valid-feedback">Nombre de Evento</div>
                                <div class="invalid-feedback">Ingrese un Nombre</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="siglas" placeholder="Siglas del evento"
                                    required>
                                <div class="valid-feedback">Siglas del Evento</div>
                                <div class="invalid-feedback">Ingrese las siglas</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="descripcion" placeholder="Descripcion"
                                    required>
                                <div class="valid-feedback">Descripcion</div>
                                <div class="invalid-feedback">Ingresa la Descripcion</div>
                            </div>

                            <div class="col-md-12">
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
                                <input class="form-control" type="number" name="capacidad" placeholder="Capacidad"
                                    required>
                                <div class="valid-feedback">Capacidad</div>
                                <div class="invalid-feedback">Ingresa la capacidad</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="duracion" placeholder="Duracion"
                                    required>
                                <div class="valid-feedback">Duracion</div>
                                <div class="invalid-feedback">Ingresa el consto</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="costo" placeholder="Costo" required>
                                <div class="valid-feedback">Costo</div>
                                <div class="invalid-feedback">Ingresa el consto</div>
                            </div>
                            <div class="col-md-12">
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




</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*,
body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html,
body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
}


.form-holder {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label,
.was-validated .form-check-input:invalid~.form-check-label,
.was-validated .form-check-input:valid~.form-check-label {
    color: #fff;
}

.form-content input[type=text],
.form-content input[type=password],
.form-content input[type=email],
.form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary {
    background-color: #6C757D;
    outline: none;
    border: 0px;
    box-shadow: none;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
    background-color: #495056;
    outline: none !important;
    border: none !important;
    box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
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
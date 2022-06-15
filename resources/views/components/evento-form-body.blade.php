@csrf
                            <div>
                                

                                <div class="col-md-12">
                                    <label for="nombre">Nombre de Evento</label>
                                    <input class="form-control" type="text" name="nombre" id="InputNombre" value="{{ old('nombre',$evento->nombre)}}" placeholder="Nombre" required>
                                    <div class="valid-feedback">Nombre de Evento</div>
                                    <div class="invalid-feedback">Ingrese un Nombre</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="siglas">Siglas de Evento</label>
                                    <input class="form-control" type="text" name="siglas" value="{{ old('siglas',$evento->siglas)}}" placeholder="Siglas del evento"
                                        required>
                                    <div class="valid-feedback">Siglas del Evento</div>
                                    <div class="invalid-feedback">Ingrese las siglas</div>
                                </div>

                                <div class="col-md-12">
                                    <label for="descripcion">Descripción de Evento</label>
                                    <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion',$evento->descripcion)}}" placeholder="Descripcion"
                                        required>
                                    <div class="valid-feedback">Descripcion</div>
                                    <div class="invalid-feedback">Ingresa la Descripcion</div>
                                </div>

                                <div class="col-md-12">
                                    <label for="areas">Área de capacitación</label>
                                    <select class="form-select mt-3" required name="areas" id="SelectArea" >
                                        <option selected disabled value="">Areas</option>
                                        <option value="Contabilidad">Contabilidad</option>
                                        <option value="Direccion">Direccion</option>
                                        <option value="Produccion">Produccion</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Recursos humanos">Recursos humanos</option>
                                    </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                                    <script>
                                        document.getElementById('SelectArea').value = "old('area',$evento->descripcion)";
                                    </script>
                                </div>
                                <div class="col-md-12">
                                    <label for="capacidad">Capacidad</label>
                                    <input class="form-control" type="number" name="capacidad" value="{{ old('capacidad',$evento->capacidad)}}" placeholder="Capacidad"
                                        required>
                                    <div class="valid-feedback">Capacidad</div>
                                    <div class="invalid-feedback">Ingresa la capacidad</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="duracion">Duración de Evento</label>
                                    <input class="form-control" type="number" name="duracion" value="{{ old('duracion',$evento->duracion)}}" placeholder="Duracion en Horas"
                                        required>
                                    <div class="valid-feedback">Duracion</div>
                                    <div class="invalid-feedback">Ingresa el consto</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="costo">Costo de Evento</label>
                                    <input class="form-control" type="number" name="costo" value="{{ old('costo',$evento->costo)}}" placeholder="Costo" required>
                                    <div class="valid-feedback">Costo</div>
                                    <div class="invalid-feedback">Ingresa el consto</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="localizacion">Localización de Evento</label>
                                    <input class="form-control" type="text" name="localizacion" value="{{ old('localizacion',$evento->localizacion)}}" placeholder="Localizacion"
                                        required>
                                    <div class="valid-feedback">Localizacion</div>
                                    <div class="invalid-feedback">Ingresa la Localizacion</div>
                                </div>



                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
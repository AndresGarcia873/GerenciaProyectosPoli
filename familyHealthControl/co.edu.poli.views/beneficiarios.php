<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div id="contenedor" class="container">
            <p style="text-align:left"><b>Información Cotizante</b></p>
            <div id="infoCotizante" class="container" style="border: 2px solid;display:flex;flex-direction: row;width:auto">
                <div class="form-group row" style="width:50%;margin: 1rem;">
                    <div style="width:20%;"><label for="identificacion"><b>Identificación:</b>&nbsp;</div>
                    <div style="width:40%;"><input type="text" id="identificacion" class="form-control" disabled></div>
                </div>
                <div class="form-group row" style="width:50%;margin: 1rem;">
                    <div style="width:30%"><label for="nombreCompleto"><b>Nombre Completo:</b>&nbsp;</div>
                    <div style="width:50%"><input type="text" id="nombreCompleto" class="form-control" disabled></div>
                </div>
            </div>
            <p style="text-align:left"><b>Información Beneficiario</b></p>
            <form id="beneficiario">
                <div id="infoBeneficiario" class="container" style="border:2px solid;display:flex;flex-direction: column;width:auto">
                    <div class="form-group row" style="width:50%;margin: 1em;">
                        <div style="width:20%"><label for="tipoIdent"><b>Tipo Identificación:</b>&nbsp;</label></div>
                        <div style="width:40%">
                            <select class="form-select" id="tipoIdent" name="tipoIdent" class="form-control">
                                <option>Opcion 1</option>
                                <option>Opcion 2</option>
                            </select>
                        </div>
                        <div style="width:40%"><input type="text" id="identificacion" class="form-control"></div>
                    </div>
                    <div class="form-group row" style="width:90%;margin:1em">
                        <div style="width:10%"><label for="nombres"><b>Nombres:</b>&nbsp;</label></div>
                        <div style="width:40%"><input type="text" id="nombres" name="nombres" class="form-control"></div>   
                        <div style="width:10%"><label for="apellidos"><b>Apellidos:</b>&nbsp;</label></div> 
                        <div style="width:40%"><input type="text" id="apellidos" name="apellidos" class="form-control"></div>   
                    </div>
                    <div style="display:flex;flex-direction: column;width:70%;margin: 1em;">
                        <div class="form-group row" style="width:100%;">
                            <div style="width:15%;"><label for="genero"><b>Genero:</b>&nbsp;</label></div>
                            <div style="width:15%">
                                <select class="form-select" id="genero" name="genero">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>   
                            <div style="width:15%;"><label for="edad"><b>Edad:</b>&nbsp;</label></div>
                            <div style="width:20%;"><input type="date" id="edad" name="edad" class="form-control"></div>
                            <div style="width:15%;"><label for="email"><b>Email:</b>&nbsp;</label></div>
                            <div style="width:20%;"><input type="text" id="email" name="email" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <p style="text-align:left"><b>Condiciones de salud</b></p>
                <div id="condSalud" class="container" style="border:2px solid;display:flex;flex-direction: row;width:auto">
                    <div style="width:25%">
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="angina">
                            <label class="form-check-label" for="angina">Angina de Pecho</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="asma">
                            <label class="form-check-label" for="angina">Asma</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="hipertension">
                            <label class="form-check-label" for="angina">Hipertensión</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="Diabetes">
                            <label class="form-check-label" for="angina">Diabetes</label>
                        </div>
                    </div>
                    <div style="width:25%">
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="obesidad">
                            <label class="form-check-label" for="angina">Obesidad</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="cancer">
                            <label class="form-check-label" for="angina">Cancer</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="estres">
                            <label class="form-check-label" for="angina">Estres</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="influenza">
                            <label class="form-check-label" for="angina">Influenza</label>
                        </div>
                    </div>
                    <div style="width:35%">
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="otra">
                            <label class="form-check-label" for="otra">Otra (Seleccione)</label>
                        </div>
                        <select class="form-select">
                            <option>opcion 1</option>
                            <option>opcion 2</option>
                        </select>
                    </div>
                </div>
                <div id="boton" class="form-group" style="width:80%;margin: 3rem;">
                    <button type="button" class="btn btn-primary btn-lg"><b>INGRESAR</b></button>
                </div>
            </form>
        </div>
    </body>
</html>
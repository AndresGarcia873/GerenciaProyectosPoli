<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Health Control</title>
    <!-- Bootstrap v5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Font Awesome v5.6.1 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
    <body>
    <div id="contenido">
        <?php require 'co.edu.poli.views/header.php'; ?>
        <?php require 'co.edu.poli.views/Menu.php'; ?>
        <div id="contenedor" class="container">
            <p style="text-align:left"><b>Información Básica Cotizante</b></p>
            <form id="beneficiario">
                <div id="infoBeneficiario" class="container" style="border:2px solid;display:flex;flex-direction: column;width:auto">
                    <div class="d-inline-flex p-2 bd-highlight ">
                        <div style="width:12%" class="p-1"><label for="tipoIdent">Tipo Identificación:</label></div>
                        <div style="width:15%" class="p-2">
                            <select class="form-select" id="tipoIdent" name="tipoIdent" class="form-control">
                                <option>Cedula</option>
                                <option>T. Identidad</option>
                                <option>Pasaporte</option>
                                <option>NIT</option>
                            </select>
                        </div>
                        <div style="width:20%" class="p-2"><input type="text" id="identificacion" class="form-control"></div>
                    </div>
                    <div class="d-inline-flex p-2 bd-highlight">
                        <div style="width:12%" class="p-2"><label for="nombres">Nombres:</label></div>
                        <div style="width:30%" class="p-2"><input type="text" id="nombres" name="nombres" class="form-control"></div>   
                        <div style="width:7%" class="p-2"><label for="apellidos">Apellidos:</label></div> 
                        <div style="width:30%" class="p-2"><input type="text" id="apellidos" name="apellidos" class="form-control"></div>   
                    </div>
                    <div class="d-inline-flex p-2 bd-highlight">
                        
                            <div style="width:12%;" class="p-2"><label for="genero">Genero:</label></div>
                            <div style="width:20%" class="p-2">
                                <select class="form-select" id="genero" name="genero">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>No Binario</option>
                                    <option>Otro</option>
                                </select>
                            </div>   
                            <div style="width:7%;" class="p-2"><label for="edad">Edad:</label></div>
                            <div style="width:18%;" class="p-2"><input type="date" id="edad" name="edad" class="form-control"></div>
                            <div style="width:7%;" class="p-2"><label for="email">Email:</label></div>
                            <div style="width:20%;" class="p-2"><input type="email" id="email" name="email" class="form-control"></div>
                        
                    </div>
                </div>
                <p style="text-align:left"><b>Condiciones de salud</b></p>
                <div id="condSalud" class="container" style="border:2px solid;display:flex;flex-direction: row;width:auto;padding:1em">
                    <div style="width:25%">
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="angina">
                            <label class="form-check-label" for="angina">Angina de Pecho</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="asma">
                            <label class="form-check-label" for="asma">Asma</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="hipertension">
                            <label class="form-check-label" for="hipertension">Hipertensión</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="Diabetes">
                            <label class="form-check-label" for="Diabetes">Diabetes</label>
                        </div>
                    </div>
                    <div style="width:25%">
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="obesidad">
                            <label class="form-check-label" for="obesidad">Obesidad</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="cancer">
                            <label class="form-check-label" for="cancer">Cancer</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="estres">
                            <label class="form-check-label" for="estres">Estres</label>
                        </div>
                        <div class="form-check" style="width:55%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="influenza">
                            <label class="form-check-label" for="influenza">Influenza</label>
                        </div>
                    </div>
                    <div style="width:20%">
                        <div class="form-check" style="width:70%;text-align:left">
                            <input class="form-check-input" type="checkbox" id="otra">
                            <label class="form-check-label" for="otra">Otra (Seleccione)</label>
                        </div>
                        <select class="form-select">
                            <option>Covid-19</option>
                            <option>VIH</option>
                            <option>H1N1</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4 p-3 align-items-center mb-5">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" type="submit">INGRESAR</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
    </body>
</html>
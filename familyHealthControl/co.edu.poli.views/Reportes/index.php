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
        <div class="container">
        <div id="reportes" class="row border border-dark p-2">
            <div class="col-lg-6 col-md-8">
                <div class="row p-3">
                    <select class="form-select" name="usuario" id="usuario" class="w-100" heigth="15px">
                        <option value="" disabled selected hidden>Seleccione Usuario</option>
                        <?php foreach ($this->usuarios as $row) {?>
                        <option value="<?php echo $row->iduser ?>"><?php echo $row->user; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row p-3">
                    <div class="col-sm"><label for="rgFechas" class="form-label"><b>Rango de fechas:</b></label></div>
                    <div class="col-sm"><input type="date" id="rgFechas" name="rgFechas" class="form-control"></div>
                    <div class="col-sm"><input type="date" id="rgFechas2" name="rgFechas2" class="form-control"></div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-8">
                <p><b>Opciones de informe</b></p>
                <div class="row border border-dark" >
                    <div class="col col align-self-start">
                        <div class="row ">
                            <div class="col align-self-start">
                                <input type="radio" name="opcioninforme" id="indSalud">       
                                <label for="indSalud" class="form-label">Indicadores Salud</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col align-self-start">                      
                                <input type="radio" name="opcioninforme" id="lisExam">    
                                <label for="lisExam" class="form-label">Listado Examenes</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col align-self-start">
                                <input type="radio" name="opcioninforme" id="ctlMedicos">    
                                <label for="ctlMedicos" class="form-label">Controles Medicos</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col align-self-start">
                                <input type="radio" name="opcioninforme" id="segCondSalud">    
                                <label for="segCondSalud" class="form-label">Seguimiento Condiciones Salud</label>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
                <div class="row mt-4 p-3 align-items-center mb-5">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="form-group">
                        <a href="<?php echo constant('URL'); ?>IndicadoresSaludDetalle" class="btn btn-primary btn-lg" type="submit">GENERAR REPORTE</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
    </body>
<html>
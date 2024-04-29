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
            <form id="beneficiario" action="<?php echo constant('URL'); ?>IngresoPacientes/registrarPaciente" method="POST">
                <div id="infoBeneficiario" class="container" style="border:2px solid;display:flex;flex-direction: column;width:auto; height: auto">
                    <div class="d-inline-flex p-2 bd-highlight ">
                        <div style="width:12%" class="p-1"><label for="tipoIdent">Tipo Identificación:</label></div>
                        <div style="width:30%" class="p-2">
                            <select class="form-select" id="tipoIdent" name="tipoIdent" class="form-control" required>
                                <option value="">Seleccione Tipo Documento</option>
                                <?php foreach ($this->tipodocumentos as $row) {?>
                                    <option value="<?php echo $row->idtipodocuser ?>"><?php echo $row->tipodocuser; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div style="width:10%" class="p-1"><label for="idUser">Número Identificación:</label></div>
                        <div style="width:30%" class="p-2"><input type="text" id="idUser" name="idUser" class="form-control" required></div>
                    </div>
                    <div class="d-inline-flex p-2 bd-highlight">
                        <div style="width:12%" class="p-2"><label for="nombres">Nombres:</label></div>
                        <div style="width:30%" class="p-2"><input type="text" id="nombres" name="nombres" class="form-control" required></div>   
                        <div style="width:10%" class="p-2"><label for="apellidos">Apellidos:</label></div> 
                        <div style="width:30%" class="p-2"><input type="text" id="apellidos" name="apellidos" class="form-control" required></div>   
                    </div>
                    <div class="d-inline-flex p-2 bd-highlight">
                        
                            <div style="width:12%;" class="p-2"><label for="genero">Genero:</label></div>
                            <div style="width:30%" class="p-2">
                                <select class="form-select" id="genero" name="genero" required>
                                <option value="">Seleccione Género</option>
                                <?php foreach ($this->generos as $row) {?>
                                    <option value="<?php echo $row->idgenero ?>"><?php echo $row->genero; ?></option>
                                <?php } ?>
                                </select>
                            </div>   
                            <div style="width:10%;" class="p-2"><label for="edad">Fecha Nacimiento:</label></div>
                            <div style="width:30%;" class="p-2"><input type="date" id="edad" name="edad" class="form-control" required></div>                            
                        
                    </div>
                    <div class="d-inline-flex p-2 bd-highlight">
                        <div style="width:12%;" class="p-2"><label for="email">Email:</label></div>
                        <div style="width:30%;" class="p-2"><input type="email" id="email" name="email" class="form-control"></div>
                    </div>
                </div>
                <p style="text-align:left"><b>Condiciones de salud</b></p>
                <div id="condSalud" class="container" style="border:2px solid;display:flex;flex-direction: row;width:auto;height:auto;padding:1em">
                    <div class="row">
                        <?php 
                            $total_checks = count($this->historialMedico);
                            $checks_per_row = ceil($total_checks / 3);
                            $check_count = 0;
                            foreach ($this->historialMedico as $row) {
                                if ($check_count % $checks_per_row === 0 && $check_count !== 0) {
                                    echo '</div><div class="row">';
                                }
                        ?>
                                <div class="form-check" style="margin-bottom: 10px;">
                                    <input class="form-check-input" type="checkbox" id="<?php echo $row->idhistmed ?>">
                                    <label class="form-check-label" for="<?php echo $row->idhistmed ?>"><?php echo $row->histmed ?></label>
                                </div>
                        <?php 
                            $check_count++;
                            } 
                        ?>
                    </div>
                </div>
                <div class="text-center <?php echo $this->color; ?>"><?php echo $this->mensaje; ?></div>
                <div class="row mt-4 p-3 align-items-center mb-5">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" type="submit" onclick="establecerRequired()">INGRESAR</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
    <script>
        // Función para verificar si al menos un checkbox está marcado
        function verificarCheckbox() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var alMenosUnoSeleccionado = false;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    alMenosUnoSeleccionado = true;
                }
            });
            return alMenosUnoSeleccionado;
        }

        // Función para establecer dinámicamente la propiedad required en un checkbox
        function establecerRequired() {
            var alMenosUnoSeleccionado = verificarCheckbox();
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.required = !alMenosUnoSeleccionado;
            });
        }
    </script>
    </body>
</html>
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
            <div class="row border border-dark p-2">
                <div class="col-lg-6 col-md-8">
                    <select class="form-select" name="usuario" id="usuario" class="w-100" heigth="15px">
                        <option value="" disabled selected hidden>Seleccione Usuario</option>
                        <?php foreach ($this->usuarios as $row) {?>
                        <option value="<?php echo $row->iduser ?>"><?php echo $row->user; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row border border-dark mt-4 p-3">
                <h2 class="mb-4">Información Paciente</h2>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="identificacion">Identificación</label>
                        <input class="form-control" type="text" placeholder="Identificación" title="Identificación"
                            name="identificacion" id="identificacion" disabled>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="nombre">Nombre Completo</label>
                        <input class="form-control" type="text" placeholder="Nombre Completo" title="Nombre Completo"
                            name="nombre" id="nombre" disabled>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="form-group">
                        <label class="form-label" for="genero">Género</label>
                        <input class="form-control" type="text" placeholder="Género" title="Género" name="genero"
                            id="genero" disabled>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="form-group">
                        <label class="form-label" for="edad">Edad</label>
                        <input class="form-control" type="text" placeholder="Edad" title="Edad" name="edad" id="edad"
                            disabled>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="text" placeholder="Email" title="Email" name="email"
                            id="email" disabled>
                    </div>
                </div>
            </div>
            <div class="row border border-dark mt-4 p-3">
                <form action="<?php echo constant('URL'); ?>IndicadoresSalud/registrarIndicador" method="POST">
                <h2 class="mb-4">Indicadores Salud</h2>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="frecuenciaCardiaca">Frecuencia Cardiaca</label>
                        <input class="form-control" type="text" placeholder="NN-NN" title="Frecuencia Cardiaca"
                            name="frecuenciaCardiaca" id="frecuenciaCardiaca">
                    </div>
                </div>
                <div class="col-lg-1 col-md-6 mt-4">
                    <h5><span class="badge bg-secondary pt-2">PPM</span></h5>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="saturacionOxigeno">Saturación Oxigeno</label>
                        <input class="form-control" type="text" placeholder="Saturación Oxigeno" title="Saturación Oxigeno"
                            name="saturacionOxigeno" id="saturacionOxigeno">
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <label class="form-label" for="vacunas">Seleccione Vacuna</label>
                    <select name="vacuna" id="vacuna" class="form-select" title="Vacuna" required>
                        <option value="">Seleccione Vacuna</option>
                        <option value="Vacuna 1">Covid-19</option>
                        <option value="Vacuna 2">Influenza</option>
                        <option value="Vacuna 3">Papiloma Humano</option>
                    </select>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="form-group">
                        <label class="form-label" for="tensionArterial">Tensión Arterial</label>
                        <input class="form-control" type="text" placeholder="Tensión Arterial" title="Tensión Arterial" name="tensionArterial"
                            id="tensionArterial">
                    </div>
                </div>
                <div class="col-lg-1 col-md-6 mt-5">
                    <h5><span class="badge bg-secondary pt-2">mm Hg</span></h5>
                </div>
            </div>
            <div class="row mt-4 p-3 align-items-center mb-5">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="form-group">
                        <div class="text-center <?php echo $this->color; ?>"><?php echo $this->mensaje; ?></div>
                        <button class="btn btn-primary btn-lg" type="submit">Modificar Indicador</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
</body>

</html>
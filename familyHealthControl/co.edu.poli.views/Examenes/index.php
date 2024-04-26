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
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div id="contenido">
        <?php require 'co.edu.poli.views/header.php'; ?>
        <?php require 'co.edu.poli.views/Menu.php'; ?>
        <div class="container">
            <div class="row border border-dark p-2">
                <div class="col-lg-6 col-md-8">
                    <select class="form-select cargarDetalleUsuario" name="usuario" id="usuario" class="w-100"
                        heigth="15px">
                        <option value="" disabled selected hidden>Seleccione Usuario</option>
                        <?php foreach ($this->usuarios as $row) {?>
                        <option value="<?php echo $row->iduser ?>"><?php echo $row->user; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-10">

                    <div class="row border border-dark mt-4 p-3">
                        <fieldset>
                            <legend>Información Paciente</legend>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="identificacion">Identificación</label>
                                        <input class="form-control" type="text" placeholder="Identificación"
                                            title="Identificación" name="identificacion" id="identificacion" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nombre">Nombre Completo</label>
                                        <input class="form-control" type="text" placeholder="Nombre Completo"
                                            title="Nombre Completo" name="nombre" id="nombre" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mt-4">
                                    <div class="form-group">
                                        <label class="form-label" for="genero">Género</label>
                                        <input class="form-control" type="text" placeholder="Género" title="Género"
                                            name="genero" id="genero" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <div class="form-group">
                                        <label class="form-label" for="edad">Edad</label>
                                        <input class="form-control" type="text" placeholder="Edad" title="Edad"
                                            name="edad" id="edad" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" type="text" placeholder="Email" title="Email"
                                            name="email" id="email" disabled>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row mt-4 p-3 ">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary">Nuevo Examen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
    <script>
    var Examenes_URL = {
        urlconsultarDetalleUsuario: "<?php echo constant('URL'); ?>Examenes/consultarDetalleUsuario"
    }
    var Examenes_Elementos = {
        usuario: "usuario",
        identificacion: "identificacion"
    }
    var Examenes_Funciones = {
        cargarDetalleUsuario: function(iduser) {
            try {
                $.ajax({
                    url: Examenes_URL.urlconsultarDetalleUsuario + "/iduser=" + iduser,
                    type: "GET",
                    cache: true,
                    async: true,
                    datatype: "json"
                }).done(function(data) {
                    data = JSON.parse(data);
                    console.log(data);
                    $("#identificacion").val(data.identificacion);
                    $("#nombre").val(data.nombre);
                    $("#genero").val(data.genero);
                    $("#edad").val(data.edad);
                    $("#email").val(data.correo);

                }).fail(function(a, b, ex) {
                    return ex;
                })
            } catch (ex) {
                console.error(ex);
            }
        },
        registrarNuevoExamen: function() {
            try {

            } catch (ex) {
                console.error(ex);
            }
        }
    }
    $(document).ready(function() {
        $('.cargarDetalleUsuario').on('change', function() {
            Examenes_Funciones.cargarDetalleUsuario($(this).val())
        });
    });
    </script>
</body>

</html>
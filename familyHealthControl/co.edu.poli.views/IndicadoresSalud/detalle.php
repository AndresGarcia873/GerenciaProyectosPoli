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
                <div class="col-lg-12 col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id Indicador</th>
                        <th scope="col">Frecuencia Cardiaca</th>
                        <th scope="col">Saturación Oxigeno</th>
                        <th scope="col">Tension Arterial</th>
                        <th scope="col">Vacuna</th>
                        <th scope="col">Fecha Creacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once 'co.edu.poli.model/modelUsuario.php';
                            foreach ($this->indicadores as $row) {
                                $indicador = new ModelUsuario();
                                $indicador = $row;
                        ?>
                        <tr>
                        <th scope="row"><?php echo $indicador->idIndicador; ?></th>
                        <td><?php echo $indicador->frecuencia; ?></td>
                        <td><?php echo $indicador->saturacion; ?></td>
                        <td><?php echo $indicador->tension; ?></td>
                        <td><?php echo $indicador->vacuna; ?></td>
                        <td><?php echo $indicador->fechaCreacion; ?></td>
                        </tr>     
                        <?php } ?>                   
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
</body>

</html>
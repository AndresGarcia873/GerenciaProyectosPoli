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
        <div id="datos" class="container">
            <div class="row border border-dark p-2">               
                <div class="col-lg-12 col-md-12">
                <form name="ingresoMedicos">
                    <div class="col-lg-12 col-md-6">
                        <div class="form-group row" style="width:80%;margin: 1rem;">
                            <div style="width: 20%;"><label for="identificacion">No. Identificación:&nbsp;</label></div>
                            <div style="width: 30%;"><input class="form-control" heigth="15px" type="text" id="identificacion" name="identificacion"></div>                    
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                    <div class="form-group row" style="width:80%;margin: 1rem;">
                        <div style="width: 20%;"><label class="form-label"  for="nombres">Nombres:&nbsp;</label></div>
                        <div style="width: 60%;"><input class="form-control" type="text" id="nombres" name="nombres"></div>
                    </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                    <div class="form-group row" style="width:80%;margin: 1rem;">
                        <div style="width: 20%;"><label class="form-label" for="Apellidos">Apellidos:&nbsp;</label></div>
                        <div style="width: 60%;"><input class="form-control" type="text" id="Apellidos" name="apellidos"></div>
                    </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                    <div class="form-group row" style="width:80%;margin: 1rem;">
                        <div style="width: 20%;"><label class="form-label" for="especialidad">Seleccione Especialidad:&nbsp;</label></div>
                        <div style="width: 40%;">
                            <select class="form-select" id="especialidad" name="especialidad">
                                <option>Medicina General</option>
                                <option>Optometría</option>
                                <option>Psicología</option>
                                <option>Pediatría</option>
                                <option>Oncología</option>
                            </select>
                        </div>
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
        </div>        
    </div>
    <?php require 'co.edu.poli.views/footer.php'; ?>
</body>
</html>



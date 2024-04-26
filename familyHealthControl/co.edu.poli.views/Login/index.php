<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Family Health Control</title>
	<!-- Bootstrap v5.0.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Estilos Css -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>co.edu.poli.repositories/css/style.css">
	<!-- Font Awesome v5.6.1 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
	<div class="login">				
		<h1 class="text-center" title="Proyecto">Family Health Control</h1>
		<div class="text-center">
			<img class="rounded" width="80" src="<?php echo constant('URL'); ?>co.edu.poli.repositories/img/logo.jpg" alt="Logo" title="Logo" id="logo" name="logo">
		</div>
		<form class="needs-validation" method="POST" action="<?php echo constant('URL'); ?>clsUsuario/autenticarUsuario">
			<div class="form-group was-validated">
				<label class="form-label" for="username">Nombre de Usuario</label>
				<input class="form-control user-icon-placeholder" type="text" placeholder="Nombre de Usuario" title="Nombre de Usuario" name="username" id="username" required>
				<div class="invalid-feedback">
					Por favor ingrese Nombre de Usuario
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="password">Contraseña</label>
				<input class="form-control lock-icon-placeholder" type="password" placeholder="Contraseña" title="Contraseña" name="password" id="password" required>
				<div class="invalid-feedback">
					Por favor ingrese Contraseña
				</div>
			</div>
			<div class="form-group">
				<p class="text-end"><a href="<?php echo constant('URL'); ?>controllersRegistro" title="Registrarse" class="text-decoration-none">Registrarse</a></p>
			</div>
			<input class="btn btn-primary w-100" type="submit" title="Iniciar Sesión" value="Iniciar Sesión">
		</form>
	</div>
</body>
</html>
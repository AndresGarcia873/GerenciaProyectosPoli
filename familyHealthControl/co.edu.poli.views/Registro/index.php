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
		<h1 class="text-center" title="Proyecto">
			<a href="<?php echo constant('URL'); ?>" class="btn btn-secondary" role="button">
				<i class="fas fa-solid fa-arrow-left"></i>
			</a>
			Registro Usuario
		</h1>
		<form class="needs-validation" action="<?php echo constant('URL'); ?>controllersRegistro/registrarUsuario" method="POST">
			<div class="form-group was-validated">
				<label class="form-label" for="tipdoc">Tipo Documento</label>
				<select name="tipdoc" id="tipdoc" class="form-select" title="Tipo Documento" required>
					<option value="">Seleccione Tipo Documento</option>
					<?php foreach ($this->tipodocumentos as $row) {?>
                    <option value="<?php echo $row->idtipodocuser ?>"><?php echo $row->tipodocuser; ?></option>
                    <?php } ?>
				</select>
				<div class="invalid-feedback">
					Por favor ingrese Tipo Documento
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="iduser">Número Documento</label>
				<input class="form-control" type="number" placeholder="Número Documento" title="Número Documento" name="iduser" id="iduser" required>
				<div class="invalid-feedback">
					Por favor ingrese Número Documento
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="name">Nombres</label>
				<input class="form-control" type="text" placeholder="Nombres" title="Nombres" name="name" id="name" required>
				<div class="invalid-feedback">
					Por favor ingrese Nombres
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="lastName">Apellidos</label>
				<input class="form-control" type="text" placeholder="Apellidos" title="Apellidos" name="lastName" id="lastName" required>
				<div class="invalid-feedback">
					Por favor ingrese Apellidos
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="username">Nombre de Usuario</label>
				<input class="form-control" type="text" placeholder="Nombre de Usuario" title="Nombre de Usuario" name="username" id="username" required>
				<div class="invalid-feedback">
					Por favor ingrese Nombre de Usuario
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="password">Contraseña</label>
				<input class="form-control" type="password" placeholder="Contraseña" title="Contraseña" name="password" id="password" required>
				<div class="invalid-feedback">
					Por favor ingrese Contraseña
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="genero">Género</label>
				<select name="genero" id="genero" class="form-select" title="Género" required>
					<option value="">Seleccione Género</option>
					<?php foreach ($this->generos as $row) {?>
                    <option value="<?php echo $row->idgenero ?>"><?php echo $row->genero; ?></option>
                    <?php } ?>
				</select>
				<div class="invalid-feedback">
					Por favor ingrese Tipo Documento
				</div>
			</div>

			<div class="form-group was-validated">
				<label class="form-label" for="email">Email</label>
				<input class="form-control" type="email" placeholder="Email" title="Email" name="email" id="email" required>
				<div class="invalid-feedback">
					Por favor ingrese Email
				</div>
			</div>

			<label class="form-label">Tipo Usuario</label>
			<?php foreach ($this->tipoUsuarios as $row) {?>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="tipoUsuario" id="tipoUsuario" value="<?php echo $row->idtipousu ?>">
					<label class="form-check-label"><?php echo $row->tipousu ?></label>
				</div>
			<?php } ?>

			<div class="text-center <?php echo $this->color; ?>"><?php echo $this->mensaje; ?></div>

			<input class="btn btn-success w-100" type="submit" title="Registrarse" value="Registrarse">
		</form>
	</div>
</body>
</html>
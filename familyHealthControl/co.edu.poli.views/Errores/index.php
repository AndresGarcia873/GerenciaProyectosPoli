<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>404 Page Error</title>
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>co.edu.poli.repositories/css/pagerror.css">
</head>
<body>
	<div id="container">
		<div class="content">
			<h2>404</h2>
			<h4><?php echo $this->mensaje; ?></h4>
			<p>La página que estabas buscando no existe. Es posible que haya escrito mal la dirección o que la página se haya movido.</p>
			<a href="<?php echo constant('URL'); ?>">Volver al inicio</a>
		</div>
	</div>
	<script type="text/javascript">
		var container = document.getElementById('container');
		window.onmousemove = function(e){
			var x = - e.clientX/5,
				y = - e.clientY/5;
			container.style.backgroundPositionX = x + 'px';
			container.style.backgroundPositionY = y + 'px';
		}
	</script>
</body>
</html>
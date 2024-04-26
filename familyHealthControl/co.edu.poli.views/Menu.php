<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>co.edu.poli.repositories/css/menu.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

</head>
<body>
    <header>
    <div style="float:left;padding:2em;width:15%;">
        <div class="menu">
            <ul class="menu">
                <li><a href="<?php echo constant('URL'); ?>Main">Inicio</a>
                </li>
                <li><a href="#">Pacientes&nbsp;<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="submenu">
                        <li><a href="<?php echo constant('URL'); ?>IngresoPacientes">&nbsp;&nbsp;Ingresar</a></li>
                        <li><a href="#">&nbsp;&nbsp;Beneficiarios</a></li>
                        <li><a href="<?php echo constant('URL'); ?>Examenes">&nbsp;&nbsp;Examenes</a></li>
                        <li><a href="<?php echo constant('URL'); ?>IndicadoresSalud">&nbsp;&nbsp;Indic. Salud</a></li>
                        <li><a href="<?php echo constant('URL'); ?>IndicadoresSaludDetalle">&nbsp;&nbsp;Indic. Salud Detalle</a></li>
                        <li><a href="#">&nbsp;&nbsp;Controles</a></li>
                        <li><a href="#">&nbsp;&nbsp;Seguimientos</a></li>
                    </ul>
                </li>
                <li><a href="#">Especialistas&nbsp;<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="submenu">
                        <li><a href="<?php echo constant('URL'); ?>IngresoMedicos">&nbsp;&nbsp;Registrar Especialista</a></li>
                    </ul>
                </li>
                <li><a href="#">Reportes&nbsp;<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="submenu">
                        <li><a href="<?php echo constant('URL'); ?>Reportes">&nbsp;&nbsp;Genera reporte</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
</body>
</html>
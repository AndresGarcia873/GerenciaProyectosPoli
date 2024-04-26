<?php 
	require_once 'co.edu.poli.controllers/controllersErrores.php';

	class UtilAplication{

		function __construct(){
			$url = isset($_GET['url']) ? $_GET['url']: null;
			$url = rtrim($url,'/');
			$url = explode('/', $url);

			//Cuando se ingresa sin definir controlador

			if (empty($url[0])) {
				$archivoController = 'co.edu.poli.controllers/clsUsuario.php';
				require_once $archivoController;
				$controller = new clsUsuario();
				$controller->loadModel('clsUsuario');
				$controller->loadScreen();

				return false;
			}

			//var_dump($url);
			$archivoController = 'co.edu.poli.controllers/' . $url[0] . '.php';

			if (file_exists($archivoController)) {
				require_once $archivoController;

				//Se inicializa el controlador

				$controller = new $url[0];
				$controller->loadModel($url[0]);

				//Contiene el número de elementos del arreglo

				$nparam=sizeof($url);

				if ($nparam>1) {
					if ($nparam>2) {
						$param=[];
						for ($i=2; $i < $nparam; $i++) { 
							array_push($param, $url[$i]);
						}
						$controller->{$url[1]}($param);
					}else{
						$controller->{$url[1]}();
					}
				}else{
					$controller->loadScreen();
				}
			}else{
				$controller = new ControllersErrores();
			}
		}
	}
?>
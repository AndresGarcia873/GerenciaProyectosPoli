<?php 
	class UtilController{
		function __construct(){
			$this->view = new UtilView();
		}
		function loadModel($model){
			//Aqui se encuentra la ruta que tomara el controlador para cargar el modelo

			$url = 'co.edu.poli.model/' . $model . 'Model.php';

			if (file_exists($url)) {
				require $url;

				$modelName = $model . 'Model';
				$this->model = new $modelName();
			}
		}
	}
?>
<?php 
require_once 'co.edu.poli.util/utilSession.php';
	class ControllersErrores extends UtilController{

		private $session;

		function __construct(){
			parent::__construct();
			$this->session = new UtilSession();
			$this->session->init();
		}
		function loadScreen(){
			$this->session->close();
			$this->view->mensaje="Opps! Página no encontrada";
			$this->view->loadScreen('Errores/index');
		}
	}
?>
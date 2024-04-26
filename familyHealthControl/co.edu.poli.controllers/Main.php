<?php 
require_once 'co.edu.poli.util/utilSession.php';
	class Main extends UtilController{

		private $session;

		function __construct(){
			parent::__construct();
			$this->session = new UtilSession();
			$this->session->init();
			if($this->session->getStatus() === 1 || empty($this->session->get('usuario')))
				exit(header('location: /familyhealthcontrol/controllersErrores')); 
		}
		function loadScreen(){
			$this->view->loadScreen('Main/index');
		}
		function logout(){
			$this->session->close();
			header('location: /familyhealthcontrol/clsUsuario');
		}
	}
?>
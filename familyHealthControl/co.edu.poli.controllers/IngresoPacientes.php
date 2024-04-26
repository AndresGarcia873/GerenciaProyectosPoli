<?php
require_once 'co.edu.poli.util/utilSession.php';
class IngresoPacientes extends UtilController{
    private $session;

	public function __construct(){
		parent::__construct();
        $this->session = new UtilSession();
		$this->session->init();
		if($this->session->getStatus() === 1 || empty($this->session->get('usuario')))
			exit(header('location: /familyhealthcontrol/controllersErrores')); 
	}
	function loadScreen(){
		$this->view->loadScreen('IngresoPacientes/index');
	}
}
?>
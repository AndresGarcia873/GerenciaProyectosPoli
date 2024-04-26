<?php
require_once 'co.edu.poli.util/utilSession.php';
class IndicadoresSaludDetalle extends UtilController{
    private $session;

	public function __construct(){
		parent::__construct();
		$this->view->mensaje = "";
        $this->session = new UtilSession();
		$this->session->init();
		if($this->session->getStatus() === 1 || empty($this->session->get('usuario')))
			exit(header('location: /familyhealthcontrol/controllersErrores')); 
	}
	function loadScreen(){
        $indicadores = $this->model->get();
		$this->view->indicadores = $indicadores;
		$this->view->loadScreen('IndicadoresSalud/detalle');
	}
}
?>
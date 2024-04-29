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
		$tipodocumentos = $this->model->getTipoDocumentoUsuario();
		$this->view->tipodocumentos = $tipodocumentos;
		$generos = $this->model->getGeneroUsuario();
		$this->view->generos = $generos;
		$historialMedico = $this->model->getHistorialMedico();
		$this->view->historialMedico = $historialMedico;
		$this->view->loadScreen('IngresoPacientes/index');
	}
}
?>
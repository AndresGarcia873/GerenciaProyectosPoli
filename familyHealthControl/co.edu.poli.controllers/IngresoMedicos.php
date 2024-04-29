<?php
require_once 'co.edu.poli.util/utilSession.php';
class IngresoMedicos extends UtilController{
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
		$especialidades = $this->model->getEspecialidades();
		$this->view->especialidades = $especialidades;
		$this->view->loadScreen('IngresoMedicos/index');
	}
	function registrarDoctor(){
		$iduser = $_POST['idUser'];
		$nombres = strtoupper($_POST['nombres']);
		$apellidos = strtoupper($_POST['apellidos']);
		$especialidad = $_POST['especialidad'];
		$mensaje = "";
		$color = "";

		if ($this->model->insert(['vIdusuario' => $iduser, 
			'vNombres' => $nombres, 'vApellidos' => $apellidos, 
			'vEspecialidad' => $especialidad])) {
			
			$color = "text-success";
			$mensaje = "Nuevo Especialista Creado";
		}else{
			$color = "text-danger";
			$mensaje = "El Registro Ya Existe";
		}
		$this->view->color = $color;
		$this->view->mensaje = $mensaje;
		$this->loadScreen();
	}
}
?>
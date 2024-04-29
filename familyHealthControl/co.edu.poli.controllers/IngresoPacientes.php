<?php
require_once 'co.edu.poli.util/utilSession.php';
class IngresoPacientes extends UtilController{
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
		$tipodocumentos = $this->model->getTipoDocumentoUsuario();
		$this->view->tipodocumentos = $tipodocumentos;
		$generos = $this->model->getGeneroUsuario();
		$this->view->generos = $generos;
		$historialMedico = $this->model->getHistorialMedico();
		$this->view->historialMedico = $historialMedico;
		$this->view->loadScreen('IngresoPacientes/index');
	}
	function registrarPaciente(){
		$tipodocuser = $_POST['tipoIdent'];
		$iduser = $_POST['idUser'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$genero = $_POST['genero'];
		$edad = $_POST['edad'];
		$email = $_POST['email'];
		$mensaje = "";
		$color = "";

		if ($this->model->insert(['vTipodocumentousuario' => $tipodocuser, 'vIdusuario' => $iduser, 
			'vNombres' => $nombres, 'vApellidos' => $apellidos, 
			'vGenero' => $genero, 'vEdad' => $edad, 'vEmail' => $email])) {
			
			$color = "text-success";
			$mensaje = "Nuevo Paciente Creado";
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
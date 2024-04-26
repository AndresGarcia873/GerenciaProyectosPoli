<?php
require_once 'co.edu.poli.util/utilSession.php';
class Examenes extends UtilController{
    private $session;

	function __construct(){
		parent::__construct();
        $this->session = new UtilSession();
		$this->session->init();
		if($this->session->getStatus() === 1 || empty($this->session->get('usuario')))
			exit(header('location: /familyhealthcontrol/controllersErrores')); 
	}
	function loadScreen(){
		$this->view->loadScreen('RegistrarExamenes/index');
	}
    function registrarExamen(){
		$tipodocuser = $_POST['tipdoc'];
		$iduser = $_POST['iduser'];
		$nombres = $_POST['name'];
		$apellidos = $_POST['lastName'];
		$usuario = $_POST['username'];
		$password = $_POST['password'];
		$genero = $_POST['genero'];
		$email = $_POST['email'];
		$tipoUsuario = $_POST['tipoUsuario'];
		$mensaje = "";
		$color = "";

		if ($this->model->insert(['vTipodocumentousuario' => $tipodocuser, 'vIdusuario' => $iduser, 
			'vNombres' => $nombres, 'vApellidos' => $apellidos, 'vUsuario' => $usuario, 'vPassword' => $password, 
			'vGenero' => $genero, 'vEmail' => $email, 'vTipoUsuario' => $tipoUsuario])) {
			
			$color = "text-success";
			$mensaje = "Nuevo Usuario Creado";
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
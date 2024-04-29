<?php 
class ControllersRegistro extends UtilController{
	public function __construct(){
		parent::__construct();
		$this->view->mensaje = "";
	}

	function loadScreen(){
		$tipodocumentos = $this->model->getTipoDocumentoUsuario();
		$this->view->tipodocumentos = $tipodocumentos;
		$generos = $this->model->getGeneroUsuario();
		$this->view->generos = $generos;
		$tipoUsuarios = $this->model->getTipoUsuario();
		$this->view->tipoUsuarios = $tipoUsuarios;
		$this->view->loadScreen('Registro/index');
	}

	function registrarUsuario(){
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
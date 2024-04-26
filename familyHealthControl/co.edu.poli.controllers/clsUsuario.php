<?php
require_once 'co.edu.poli.util/utilSession.php';
class clsUsuario extends UtilController{
    private $session;

	public function __construct(){
		parent::__construct();
        $this->session = new UtilSession();
	}
	function loadScreen(){
		$this->view->loadScreen('Login/index');
	}
    function autenticarUsuario(){
        $usuario = $_POST['username'];
        $password = $_POST['password'];
        if ($this->model->autenticarUsuario(['usuario' => $usuario, 'password' => $password])) {
            //Iniciar sesión
            $this->session->init();
            $this->session->add('usuario', $usuario);
            header('location: /familyhealthcontrol/Main');
        } else{
            header('location: /familyhealthcontrol');
        }
    }
}
?>
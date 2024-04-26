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
		$usuarios = $this->model->getUsuarios();
		$this->view->usuarios = $usuarios;
		$this->view->loadScreen('Examenes/index');
	}
    function consultarDetalleUsuario($iduser){
        $usuarios = $this->model->getUsuariobyUser($iduser);
        echo json_encode($usuarios); 
    }
}
?>
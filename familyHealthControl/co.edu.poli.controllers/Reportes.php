<?php
require_once 'co.edu.poli.util/utilSession.php';
class Reportes extends UtilController{
    private $session;

	public function __construct(){
		parent::__construct();
        $this->session = new UtilSession();
	}
	function loadScreen(){
        $usuarios = $this->model->getUsuarios();
        $this->view->usuarios = $usuarios;
		$this->view->loadScreen('Reportes/index');
	}
}
?>
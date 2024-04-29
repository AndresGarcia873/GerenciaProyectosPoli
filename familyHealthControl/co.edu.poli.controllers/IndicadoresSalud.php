<?php
require_once 'co.edu.poli.util/utilSession.php';
class IndicadoresSalud extends UtilController{
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
		$usuarios = $this->model->getUsuarios();
		foreach($usuarios as $usuario){
			$this->session->add('id', $usuario->id);
		}
		$this->view->usuarios = $usuarios;
		$this->view->loadScreen('IndicadoresSalud/index');
	}
	function consultarDetalleUsuario($iduser){
        $usuarios = $this->model->getUsuariobyUser($iduser);
        echo json_encode($usuarios); 
    }
	function registrarIndicador(){
		$iduser = $this->session->get('id');
		$fecha = date('y-m-d H:i:s');
		$frecuenciaCardiaca = $_POST['frecuenciaCardiaca'];
		$saturacionOxigeno = $_POST['saturacionOxigeno'];
		$vacuna = $_POST['vacuna'];
		$tensionArterial = $_POST['tensionArterial'];
		$color = "";
		$mensaje = "";
		if ($this->model->insert(['vIduser' => $iduser, 'vFecha' => $fecha, 'vFrecuenciacardiaca' => $frecuenciaCardiaca, 'vSaturacionoxigeno' => $saturacionOxigeno, 'vVacuna' => $vacuna, 'vTensionarterial' => $tensionArterial])) {
			$color = "text-success";
			$mensaje = "Nuevo Indicador de Salud Creado";
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
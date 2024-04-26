<?php 
class clsUsuarioModel extends UtilModel {

    public function __construct(){
		parent::__construct();
	}

    public function autenticarUsuario($datos) {
        //Método para insertar datos en la Base de Datos

        try{
            //aqui se coloca el nombre de la tabla y los campos de la base de datos
            $query = $this->db->connect()->prepare('SELECT log_user,log_pass from usuarios
            where log_user = :vUser and BINARY log_pass = :vPassword');

            //este if contiene los datos que vienen desde el controlador controllerRegistrar.php en su método registrarAprendiz

            $query->execute(['vUser' => $datos['usuario'],'vPassword' => $datos['password']]);
            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            return false;
        }
    }

}
?>
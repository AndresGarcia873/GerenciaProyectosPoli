<?php 
include_once 'co.edu.poli.model/modelExamenes.php';
class ExamenesModel extends UtilModel {
    public function __construct(){
		parent::__construct();
	}

    public function getUsuarios(){
        //Método para consultar datos en la Base de Datos de usuario
        $items = [];
        try{
          //Se realiza la consulta general sobre la tabla 
          $query = $this->db->connect()->query('SELECT USU_IDEN,USU_NOMBRES,USU_APELLIDOS from usuarios');
          while ($row = $query->fetch()) {
            $item = new ModelExamenes();
            //Los items cargan los campos de la Base de Datos
            $item->iduser = $row['USU_IDEN'];
            $item->user = $row['USU_NOMBRES'] . " " . $row['USU_APELLIDOS'];
            array_push($items, $item);
          }
          return $items;
        }catch(PDOException $e){
          return [];
        }
      }
      public function getUsuariobyUser($iduser){
        //Método para consultar datos en la Base de Datos de usuario
        try{
          //Se realiza la consulta general sobre la tabla 
          $query = $this->db->connect()->query('SELECT usu.*,gen.*
          FROM usuarios AS usu 
          INNER JOIN generos as gen
          ON gen.GEN_ID=usu.USU_GENERO
          WHERE usu.USU_IDEN="'.explode("=", $iduser[0])[1].'"');
          while ($row = $query->fetch()) {
            $item = new ModelExamenes();
            //Los items cargan los campos de la Base de Datos
            $item->identificacion = $row['USU_IDEN'];
            $item->nombre = $row['USU_NOMBRES'] . " " . $row['USU_APELLIDOS'];
            $item->genero = $row['GEN_DESCRIPCION'];
            $item->correo = $row['USU_EMAIL'];
            $item->edad = "25";//$row['GEN_DESCRIPCION'];
            return $item;
          }
          ;
        }catch(PDOException $e){
          return [];
        }
      }

}
?>
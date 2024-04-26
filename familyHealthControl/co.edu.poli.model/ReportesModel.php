<?php 
include_once 'co.edu.poli.model/modelUsuario.php';
class ReportesModel extends UtilModel {

  public function __construct(){
    parent::__construct();
  }

  public function getUsuarios(){
    //Método para consultar datos en la Base de Datos de usuario
    $items = [];
    try{
      //Se realiza la consulta general sobre la tabla 
      $query = $this->db->connect()->query('SELECT USU_ID,USU_IDEN,USU_NOMBRES,USU_APELLIDOS from usuarios');
      while ($row = $query->fetch()) {
        $item = new ModelUsuario();
        //Los items cargan los campos de la Base de Datos
        $item->id = $row['USU_ID'];
        $item->iduser = $row['USU_IDEN'];
        $item->user = $row['USU_NOMBRES'] . " " . $row['USU_APELLIDOS'];
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      return [];
    }
  }
    

}
?>
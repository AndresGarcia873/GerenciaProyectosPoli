<?php 
include_once 'co.edu.poli.model/modelUsuario.php';
class IngresoPacientesModel extends UtilModel {

  public function __construct(){
    parent::__construct();
  }

  public function getTipoDocumentoUsuario(){
    //Método para consultar datos en la Base de Datos de usuario
    $items = [];
    try{
      //Se realiza la consulta general sobre la tabla 
      $query = $this->db->connect()->query('SELECT * from tip_iden');
      while ($row = $query->fetch()) {
        $item = new ModelUsuario();
        //Los items cargan los campos de la Base de Datos
        $item->idtipodocuser = $row['TIP_IDEN_ID'];
        $item->tipodocuser = $row['TIP_ID_DESCRIPCION'];
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      return [];
    }
  }

  public function getGeneroUsuario(){
    //Método para consultar datos en la Base de Datos de usuario
    $items = [];
    try{
      //Se realiza la consulta general sobre la tabla 
      $query = $this->db->connect()->query('SELECT * from generos');
      while ($row = $query->fetch()) {
        $item = new ModelUsuario();
        //Los items cargan los campos de la Base de Datos
        $item->idgenero = $row['GEN_ID'];
        $item->genero = $row['GEN_DESCRIPCION'];
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      return [];
    }
  }

  public function getHistorialMedico(){
    //Método para consultar datos en la Base de Datos de usuario
    $items = [];
    try{
      //Se realiza la consulta general sobre la tabla 
      $query = $this->db->connect()->query('SELECT * from historialesmedicos');
      while ($row = $query->fetch()) {
        $item = new ModelUsuario();
        //Los items cargan los campos de la Base de Datos
        $item->idhistmed = $row['ID'];
        $item->histmed = $row['ENFERMEDADESPREVIAS'];
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      return [];
    }
  }

}
?>
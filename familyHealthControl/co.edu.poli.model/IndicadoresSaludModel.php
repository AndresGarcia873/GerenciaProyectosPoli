<?php 
include_once 'co.edu.poli.model/modelUsuario.php';
class IndicadoresSaludModel extends UtilModel {

  public function __construct(){
    parent::__construct();
  }

  public function insert($datos){
    //Método para insertar datos en la Base de Datos
    try{
      //Aqui se coloca el nombre de la tabla y los campos de la base de datos
      $query = $this->db->connect()->prepare('INSERT into estados_salud (ESTSAL_USU_ID,ESTSAL_FECHA,ESTSAL_FRECUENCIA,ESTSAL_SATURACION,ESTSAL_TENSION,ESTSAL_VACUNAS)
        values(:vIduser, :vFecha, :vFrecuenciacardiaca, :vSaturacionoxigeno, :vTensionarterial, :vVacuna)');
      //Este if contiene los datos que vienen desde el controlador IndicadoresSalud.php en su método registrarIndicador
      if ($query->execute(['vIduser' => $datos['vIduser'], 'vFecha' => $datos['vFecha'], 'vFrecuenciacardiaca' => $datos['vFrecuenciacardiaca'], 'vSaturacionoxigeno' => $datos['vSaturacionoxigeno'], 'vTensionarterial' => $datos['vTensionarterial'], 'vVacuna' => $datos['vVacuna']]));
      return true;
    }catch(PDOException $e){
      return false;
    }
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
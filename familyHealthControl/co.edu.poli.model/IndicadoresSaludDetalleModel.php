<?php 
include_once 'co.edu.poli.model/modelUsuario.php';
class IndicadoresSaludDetalleModel extends UtilModel {

  public function __construct(){
    parent::__construct();
  }

  public function get(){
    //Método para consultar datos en la Base de Datos
    $items = [];
    try{
        //Se realiza la consulta general sobre la tabla estados_salud
        $query = $this->db->connect()->query('SELECT * from estados_salud');
        while ($row = $query->fetch()) {
            $item = new ModelUsuario();
            //Los items cargan los campos de la Base de Datos
            $item->idIndicador = $row['ESTSAL_ID'];
            $item->frecuencia = $row['ESTSAL_FRECUENCIA'];
            $item->saturacion = $row['ESTSAL_SATURACION'];
            $item->tension = $row['ESTSAL_TENSION'];
            $item->vacuna = $row['ESTSAL_VACUNAS'];
            $item->fechaCreacion = $row['ESTSAL_FECHA'];
            array_push($items, $item);
        }
        return $items;
    }catch(PDOException $e){
        return [];
    }
}

}
?>
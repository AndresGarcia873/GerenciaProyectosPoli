<?php 
include_once 'co.edu.poli.model/modelUsuario.php';
class IngresoMedicosModel extends UtilModel {

  public function __construct(){
    parent::__construct();
  }

  public function insert($datos){
    //Método para insertar datos en la Base de Datos
    try{
        //Aqui se coloca el nombre de la tabla y los campos de la base de datos
        $query = $this->db->connect()->prepare('INSERT into doctores (PRIMERNOMBRE, SEGUNDONOMBRE, ID_ESPECIALIDAD) 
            values(:vNombres, :vApellidos, :vEspecialidad)');
        //Este if contiene los datos que vienen desde el controlador controllersRegistro.php en su método registrarUsuario
        if ($query->execute(['vNombres' => $datos['vNombres'], 'vApellidos' => $datos['vApellidos'], 
            'vEspecialidad' => $datos['vEspecialidad']]));
        return true;
    }catch(PDOException $e){
        return false;
    }
  }

  public function getEspecialidades(){
    //Método para consultar datos en la Base de Datos de usuario
    $items = [];
    try{
      //Se realiza la consulta general sobre la tabla 
      $query = $this->db->connect()->query('SELECT * from especialidades');
      while ($row = $query->fetch()) {
        $item = new ModelUsuario();
        //Los items cargan los campos de la Base de Datos
        $item->idespecialidad = $row['IDESPECIALIDAD'];
        $item->especialidad = $row['NOMBRE'];
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      return [];
    }
  }

}
?>
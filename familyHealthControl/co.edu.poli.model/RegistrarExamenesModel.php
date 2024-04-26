<?php 
include_once 'co.edu.poli.model/modelUsuario.php';
class ControllersRegistroModel extends UtilModel {

  public function __construct(){
    parent::__construct();
  }
  
  public function insert($datos){
    //Método para insertar datos en la Base de Datos
    try{
        //Aqui se coloca el nombre de la tabla y los campos de la base de datos
        $query = $this->db->connect()->prepare('INSERT into usuarios (USU_TIP_ID,USU_IDEN,USU_NOMBRES,USU_APELLIDOS,LOG_USER,LOG_PASS,USU_GENERO,USU_EMAIL,USU_TIPO) 
            values(:vTipodocumentousuario, :vIdusuario, :vNombres, :vApellidos, :vUsuario, :vPassword, :vGenero, :vEmail, :vTipoUsuario)');
        //Este if contiene los datos que vienen desde el controlador controllersRegistro.php en su método registrarUsuario
        if ($query->execute(['vTipodocumentousuario' => $datos['vTipodocumentousuario'], 'vIdusuario' => $datos['vIdusuario'], 'vNombres' => $datos['vNombres'], 'vApellidos' => $datos['vApellidos'], 
            'vUsuario' => $datos['vUsuario'], 'vPassword' => $datos['vPassword'], 'vGenero' => $datos['vGenero'], 'vEmail' => $datos['vEmail'], 'vTipoUsuario' => $datos['vTipoUsuario']]));
        return true;
    }catch(PDOException $e){
        return false;
    }
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

}
?>
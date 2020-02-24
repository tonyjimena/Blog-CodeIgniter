<?php
class UsersModel extends CI_Model
{
  # Variable donde se guarda la conexión a la base de datos
  private $db = null;

  function __construct() {

    parent::__construct();

    #cargamos la conexion a la base de datos

    $this->db = $this->load->database('default', true);
  }

    # Ejecuta consultas y devuelte los resultados en un array
    public function ExecuteArrayResults( $sql)
    {
    $query = $this->db->query( $sql);
    $rows = $query->result_array();
    $query->free_result();

    return ( $rows);
    }

    public function ExecuteResultsParamsArray( $sql, $params)
    {
    $query = $this->db->query( $sql, $params);
    $rows['data'] = $query->result_array();
    $query->free_result();

    return ( $rows);
    }

  public function login( $datos)
  {
      
      $sql = "Select * from authors Where email = '".$datos['email']."' And
        password ='".$datos['password']."'";

      return ( $this->ExecuteArrayResults( $sql));
  }
  
  public function insert( $tabla, $datos)
  {
  $this->db->insert( $tabla, $datos);
  }
  

}
?>
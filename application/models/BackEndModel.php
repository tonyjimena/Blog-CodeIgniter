<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BackEndModel extends CI_Model
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

    # Ejecuta querys sin devolver resultados deletes, inserts o updates
    public function Execute( $sql)
    {
    $this->db->query( $sql);
    }

    public function insert( $tabla, $datos)
    {
    $this->db->insert( $tabla, $datos);
    }

    public function login( $datos)
    {
        
        $sql = "Select * from authors Where email = '".$datos['email']."' And
          password ='".$datos['password']."'";

        return ( $this->ExecuteArrayResults( $sql));
    }

    public function list_post()
    {
        
        $sql = "Select * from posts order by id desc";

        return ( $this->ExecuteArrayResults( $sql));
    }

    public function list_authors()
    {
        
        $sql = "Select * from authors order by display_name asc";

        return ( $this->ExecuteArrayResults( $sql));
    }
}
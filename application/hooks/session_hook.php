<?php
class Gestion_sesion{
   function index(){

      //instanciamos al objeto codeigniter
      $CI =& get_instance(); 
      
      // obtenemos el nombre del controlador en el que estamos
      $controlador = $CI->router->class;
      
      // indicamos los controladores que pueden ver por defecto los visitantes
      $controladores_guest = array('UsersController', 'PostController');
                
      // si la sesion se inicio y el usuario intenta entrar a login_c, 
      // lo enviamos al index    
      if(is_logged_in() && $controlador=='UsersController'){
        header ("location: /list");       

  
      // si el usuario es un visitante, 
      // solo puede entrar a los controladores permitidos para él..
      }elseif(!is_logged_in() && 
             (!in_array($controlador,$controladores_guest))){
                header ("location: /");       

      /*
      // cerramos la sesion si el tiempo establecido expiro
      // solo si se cambio el tiempo de expiracion
      }elseif($CI->config->item('sess_use_time_expire')){
          
          // cargamos la libreria de sesion
          $CI->load->library('session');
          $arrSesion = $CI->session->userdata('ses_usuario');
          if (is_array($arrSesion) and $arrSesion['seslimite']<=time()){
            cerrar_sesion();
          }*/
      }
      unset($CI);
   }
}
?>
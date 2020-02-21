<?php

class UsersController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('BackEndModel', 'BackEndModel');
        }

    public function registro()
    {
        $datos = array();
        $vista = array(
            'vista' => 'admin/new_autor.php',
            'params' => $datos,
            'layout' => 'layout.php',
            'titulo' => 'Prueba de Controlador'
        );


        $this->layouts->view ( $vista);
    }

    #funciones para logearse:
    public function login()
    {
        //debug($this->uri);
            if ( $this->uri->segment(2) ==! null && $this->uri->segment(2) == 'error' )
        {
        
        $datos = array ( 
            'error' => "Usuario o contraseña invalidos"
        );

        }
        else
        {
        $datos = array ();
        }

        $vista = array(
			'vista' => 'admin/login.php',
			'params' => $datos,
			'layout' => 'layout.php',
			'titulo' => 'Prueba de Controlador login'
		);


		$this->layouts->view ( $vista);
    }

    public function login2()
    {
        $datos['email'] = $_POST['email_login'];
        $datos['password'] = md5($_POST['login_password']);

        $user = $this->BackEndModel->login($datos);
        
        if (empty($user)){
            header ("location: /login/error");

        }
        else{
            //debug($user);
            $arrayuser = array(
                'username' => $user[0]['display_name'],
                'email' => $user[0]['email'],
                'login_in' => TRUE
            );
            $this->session->set_userdata($arrayuser);
            //debug($this->session);
            header ("location: /list");

        }   
    }

    public function add_autor()
	{
        //debug ( $_POST);
        foreach ($_POST as $key => $value)
        {
            $datos[$key] = $value;
        }

        if (isset($datos['enabled']))
        {
            $datos['enabled'] = 1;
        }
        else
        {
            $datos['enabled'] = 0;
        }
        //debug($datos);
        $datos['password'] = md5($datos['password']);
        $this->BackEndModel->insert('authors', $datos);
        
        header ("location: /list");
    }

    public function logout(){

        //debug($this->session);
        if($this->session->has_userdata('username')){
        $this->session->sess_destroy($this->session);

        debug($this->session);

        //echo "Sesion Cerrada";
        header ("location: /");
        }else{
            echo "No hay sesion";
        }

    }

}

?>
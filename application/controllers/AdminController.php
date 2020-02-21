<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('BackEndModel', 'BackEndModel');
    }
	
	public function index()
	{
        $datos = array();
        $vista = array(
			'vista' => 'admin/index.php',
			'params' => $datos,
			'layout' => 'layout.php',
			'titulo' => 'Prueba de Controlador'
		);


		$this->layouts->view ( $vista);
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
    

    public function list()
    {
        $posts = $this->BackEndModel->list_post();
        //debug($posts);

        $datos = array(
            'posts' => $posts
        );
        $vista = array(
			'vista' => 'admin/index.php',
			'params' => $datos,
			'layout' => 'layout_home.php',
			'titulo' => 'Prueba de Controlador'
		);


		$this->layouts->view ( $vista);
       
    }

    public function new_post()
    {
        $authors = $this->BackEndModel->list_authors();
        //debug($posts);

        $datos = array( 'authors' => $authors);


        $vista = array(
			'vista' => 'admin/new_post.php',
			'params' => $datos,
			'layout' => 'layout_home.php',
			'titulo' => 'Prueba de Controlador'
		);


		$this->layouts->view ( $vista);
       
    }

    public function add()
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
        $this->BackEndModel->insert('posts', $datos);
        
        header ("location: /list");       
    }

    public function autores()
    {
        $authors = $this->BackEndModel->list_authors();
        //debug($posts);

        $datos = array( 'authors' => $authors);


        $vista = array(
			'vista' => 'admin/list_autores.php',
			'params' => $datos,
			'layout' => 'layout_home.php',
			'titulo' => 'Prueba de Controlador'
		);


		$this->layouts->view ( $vista);
       
    }

    public function edit_autor()
    {
       //debug($this->uri);
        //La vista necesita los autores para mostrar el select con la lista de autores
        //$authors = $this->BackEndModel->list_authors();


       $author = $this->BackEndModel->listOneAuthor( $this->uri->segment(2));
       
       //debug($post);

       $datos = array( 
            'autor' => $author['data']);

        $vista = array(
			'vista' => 'admin/edit_autor.php',
			'params' => $datos,
			'layout' => 'layout_home.php',
			'titulo' => 'Prueba de Controlador'
		);

		$this->layouts->view ( $vista);

       
    }

    public function edit()
    {
       //debug($this->uri);
        //La vista necesita los autores para mostrar el select con la lista de autores
        $authors = $this->BackEndModel->list_authors();


       $post = $this->BackEndModel->listOnePost( $this->uri->segment(2));
       
       //debug($post);

       $datos = array( 
            'post' => $post['data'],
            'authors' => $authors);

        $vista = array(
			'vista' => 'admin/edit_post.php',
			'params' => $datos,
			'layout' => 'layout_home.php',
			'titulo' => 'Prueba de Controlador'
		);


		$this->layouts->view ( $vista);

       
    }

    public function update()
    {
        //debug($_POST);
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
        $where['id'] = $datos['id'];
        unset( $datos['id']);

        $this->BackEndModel->update( 'posts', $datos, $where);

        header ("location: /list");
    }

    public function update_autor()
    {
        //debug($_POST);
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

        $where['id'] = $datos['id'];
        unset( $datos['id']);

        $this->BackEndModel->update( 'authors', $datos, $where);

        header ("location: /autores");
    }

    public function delete_author(){

        $where['id']= $this->uri->segment(2);


        $this->BackEndModel->delete( 'authors', $where);

        header ("location: /autores");
    }

    public function delete_post(){

        $where['id']= $this->uri->segment(2);


        $this->BackEndModel->delete( 'posts', $where);

        header ("location: /list");
    }


}
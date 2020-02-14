<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostController extends CI_Controller {

	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Postmodel', 'PostModel');
    }
	
	public function index()
	{
        $posts = $this->PostModel->list_all_posts();

        $datos = array(
            'posts' => $posts
        );

        $vista = array(
			'vista' => 'web/index.php',
			'params' => $datos,
			'layout' => 'layout_blog.php',
			'titulo' => 'BLOG'
		);


        $this->layouts->view ( $vista);
    }
        

    public function one_post()
	{
        $post_id= $this->uri->segment(2);

        //debug($this->uri);
        
        $post = $this->PostModel->list_one_post($post_id);
        
        //debug($post);
        
        $datos = array(
            'post' => $post['0']
        );

        $vista = array(
			'vista' => 'web/post.php',
			'params' => $datos,
			'layout' => 'layout_blog.php',
			'titulo' => 'BLOG'
		);


        $this->layouts->view ( $vista);
    }

    public function one_author()
	{
        $author_id= $this->uri->segment(2);

        //debug($this->uri);
        
        $post = $this->PostModel->list_one_author($author_id);
        
        //debug($post);
        
        $datos = array(
            'post' => $post['0']
        );

        $vista = array(
			'vista' => 'web/author.php',
			'params' => $datos,
			'layout' => 'layout_blog.php',
			'titulo' => 'BLOG'
		);


        $this->layouts->view ( $vista);
    }
}

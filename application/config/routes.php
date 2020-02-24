<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

#POST
$route['admin'] = 'AdminController/index';
$route['new_post'] = 'AdminController/new_post';
$route['add'] = 'AdminController/add';
$route['autores'] = 'AdminController/autores';

#EDIT
$route['edit/(:num)'] = 'AdminController/edit';
$route['edit_autor/(:num)'] = 'AdminController/edit_autor';

#UPDATE
$route['update'] = 'AdminController/update';
$route['update_autor'] = 'AdminController/update_autor';

#DELETES
$route['delete_author/(:num)'] = 'AdminController/delete_author';
$route['delete_post/(:num)'] = 'AdminController/delete_post';

#LOGIN  USERSCONTROLLER
$route['registro'] = 'UsersController/registro';
$route['login'] = 'UsersController/login';
$route['login2'] = 'UsersController/login2';
$route['login/error'] = 'UsersController/login';
$route['add_autor'] = 'UsersController/add_autor';
$route['logout'] = 'UsersController/logout';



$route['list'] = 'AdminController/list';

$route['post/(:num)'] = 'PostController/one_post';
$route['author/(:num)'] = 'PostController/one_author';

#reservados
$route['default_controller'] = 'PostController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

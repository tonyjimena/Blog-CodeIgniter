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

#LOGIN
$route['admin/registro'] = 'AdminController/registro';
$route['admin/login'] = 'AdminController/login';
$route['admin/login2'] = 'AdminController/login2';
$route['login/error'] = 'AdminController/login';

$route['add_autor'] = 'AdminController/add_autor';
$route['list'] = 'AdminController/list';

$route['post/(:num)'] = 'PostController/one_post';
$route['author/(:num)'] = 'PostController/one_author';

#reservados
$route['default_controller'] = 'PostController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

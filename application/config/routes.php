<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['todos/create']          = 'todos/create';
$route['todos/delete/(:any)']   = 'todos/delete/$1';
$route['todos/edit/(:any)']     = 'todos/edit/$1';
$route['todos/update/(:any)']   = 'todos/update/$1';
$route['todos'] = 'todos';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

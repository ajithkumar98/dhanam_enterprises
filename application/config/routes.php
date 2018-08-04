<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['services/view/(:any)']='services/view/$1';
$route['services']='services';
$route['default_controller'] = 'homes/view';
$route['(:any)']='homes/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

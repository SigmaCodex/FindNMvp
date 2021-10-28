<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['valid']			     = 'LogicalController/login_validation';

//MainController
$route['login']				 = 'MainController/login';

$route['default_controller'] = 'MainController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'pages/view';
 $route['transactions'] = 'pages/transactions';
 $route['insertbook'] = "pages/insertBook";

 $route['account'] = 'pages/account';
 $route['getCoin'] = 'apicoin/get_coin';

$route['admin'] = "login";
$route['admin/checklogin'] = "login/checklogin";
$route['admin/logout'] = "login/checklogout";
$route['admin/dashboard'] = "dashboard/index";
$route['admin/dashboard/(:any)'] = "dashboard/$1";

$route['admin/users'] = "users/index";

$route['admin/users/(:any)'] = "users/$1";

$route['admin/profile'] = "profile/index";

$route['admin/category/(:any)'] = "category/$1";

$route['admin/setting'] = "setting/index";
$route['admin/setting/(:any)'] = "setting/$1";

$route['admin/loan'] = "loan/index";
$route['admin/loan/(:any)'] = "loan/$1";

$route['admin/coin'] = "coin/index";
$route['admin/coin/(:any)'] = "coin/$1";

$route['admin/bookings'] = "bookings/index";
$route['admin/bookings/(:any)'] = "bookings/$1";


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['^(.*)$'] = $route['default_controller'];

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
$route['default_controller'] = 'frontend/admin';

/***
*ADMIN ROUTE
*/
 $route['admin'] = 'backend/auth/login'; 
 $route['admin/dashboard'] = 'backend/dashboard';  
$route['admin/category/(:any)'] = 'backend/category/$1'; 

 $route['admin/testgroup/(:any)'] = 'backend/testgroup/$1'; 
 $route['admin/testgroup/edit/(:any)'] = 'backend/testgroup/edit/$1'; 

 $route['admin/test/(:any)'] = 'backend/test/$1'; 
 $route['admin/test/edit/(:any)'] = 'backend/test/edit/$1'; 
 

 $route['admin/report/(:any)'] = 'backend/report/$1'; 
 $route['admin/report/print/(:any)'] = 'backend/report/print/$1'; 
 $route['admin/banner/edit/(:any)'] = 'backend/banner/edit/$1'; 

$route['admin/setting/(:any)'] = 'backend/settings/$1'; 
$route['admin/setting/edit/(:any)'] = 'backend/settings/edit/$1'; 
 
 ##Front

$route['sitemap\.xml'] = "frontend/home/sitemap";


$route['(:any)'] = 'frontend/home/allpages'; 
//$route['pages(:any)'] = 'frontend/home/cmspages'; 
 $route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



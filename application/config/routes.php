<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Backend
 */
$route['admin/login'] = 'Authentication/viewLoginAdmin';
$route['admin'] = 'Dashboard';
$route['admin/dashboard'] = 'Dashboard';
/**
 * CRUD BANNER
 */
$route['admin/banner'] = 'Banner';
$route['admin/banner/add'] = 'Banner/addBannerForm';
$route['admin/banner/set'] = 'Banner/setBanner';
$route['admin/banner/edit/(:num)'] = 'Banner/editBannerForm/$1';
$route['admin/banner/update/(:num)'] = 'Banner/updateBanner/$1';
$route['admin/banner/delete/(:num)'] = 'Banner/delete/$1';
/**
 * CRUD HEROES
 */
$route['admin/heroes'] = 'Heroes';
$route['admin/heroes/add'] = 'Heroes/addHeroesForm';
$route['admin/heroes/set'] = 'Heroes/setHeroes';
$route['admin/heroes/edit/(:num)'] = 'Heroes/editHeroesForm/$1';
$route['admin/heroes/update/(:num)'] = 'Heroes/updateHeroes/$1';
$route['admin/heroes/delete/(:num)'] = 'Heroes/delete/$1';
/**
 * CRUD PRESBITER
 */
$route['admin/presbiter'] = 'Presbiter';
$route['admin/presbiter/add'] = 'Presbiter/addPresbiterForm';
$route['admin/presbiter/set'] = 'Presbiter/setPresbiter';
$route['admin/presbiter/edit/(:num)'] = 'Presbiter/editPresbiterForm/$1';
$route['admin/presbiter/update/(:num)'] = 'Presbiter/updatePresbiter/$1';
$route['admin/presbiter/delete/(:num)'] = 'Presbiter/delete/$1';
/**
 * CRUD PELKAT
 */
$route['admin/pelkat'] = 'Pelkat';
$route['admin/pelkat/add'] = 'Pelkat/addPelkatForm';
$route['admin/pelkat/set'] = 'Pelkat/setPelkat';
$route['admin/pelkat/edit/(:num)'] = 'Pelkat/editPelkatForm/$1';
$route['admin/pelkat/update/(:num)'] = 'Pelkat/updatePelkat/$1';
$route['admin/pelkat/delete/(:num)'] = 'Pelkat/delete/$1';
/**
 * CRUD KOMISI
 */
$route['admin/komisi'] = 'Komisi';
$route['admin/komisi/add'] = 'Komisi/addKomisiForm';
$route['admin/komisi/set'] = 'Komisi/setKomisi';
$route['admin/komisi/edit/(:num)'] = 'Komisi/editKomisiForm/$1';
$route['admin/komisi/update/(:num)'] = 'Komisi/updateKomisi/$1';
$route['admin/komisi/delete/(:num)'] = 'Komisi/delete/$1';
/**
 * CRUD KMJ
 */
$route['admin/kmj'] = 'KMJ';
$route['admin/kmj/add'] = 'KMJ/addKmjForm';
$route['admin/kmj/set'] = 'KMJ/setKmj';
$route['admin/kmj/edit/(:num)'] = 'KMJ/editKmjForm/$1';
$route['admin/kmj/update/(:num)'] = 'KMJ/updateKmj/$1';
$route['admin/kmj/delete/(:num)'] = 'KMJ/delete/$1';
/**
 * CRUD Pages
 */
$route['admin/pages'] = 'Pages';
$route['admin/pages/add'] = 'Pages/addPagesForm';
$route['admin/pages/set'] = 'Pages/setPages';
$route['admin/pages/edit/(:num)'] = 'Pages/editPagesForm/$1';
$route['admin/pages/update/(:num)'] = 'Pages/updatePages/$1';
$route['admin/pages/delete/(:num)'] = 'Pages/delete/$1';
/**
 * CRUD Admin
 */
$route['admin/admins'] = 'Admin';
$route['admin/admins/add'] = 'Admin/set';
$route['admin/admins/update/(:num)'] = 'Admin/update/$1';
$route['admin/admins/delete/(:num)'] = 'Admin/delete/$1';
$route['admin/admins/changepass/(:num)'] = 'Admin/changePassword/$1';
/**
 * CRUD UsersRole
 */
$route['admin/role'] = 'UsersRole';
$route['admin/role/add'] = 'UsersRole/set';
$route['admin/role/add/(:num)'] = 'UsersRole/set/$1';
$route['admin/role/delete/(:num)'] = 'UsersRole/delete/$1';
/**
 * SYSTEM SETTINGS
 * */
$route['admin/settings'] = 'Settings';
$route['admin/settings/set'] = 'Settings/set';
$route['admin/settings/set/(:num)'] = 'Settings/set/$1';
$route['admin/settings/delete/(:num)'] = 'Settings/delete/$1';
$route['admin/logs'] = 'Settings/logs';
$route['admin/logs/clear'] = 'Settings/clearLog';
/**
 * Frontend
 */
$route['/'] = 'Frontend';
$route['presbiter/(:any)'] = 'Frontend/viewPresbiter/$1';
$route['pelkat/(:any)'] = 'Frontend/viewPelkat/$1';
$route['komisi/(:any)'] = 'Frontend/viewKomisi/$1';
$route['kmj'] = 'Frontend/viewKmj';
$route['pages/(:any)'] = 'Frontend/viewPages/$1';
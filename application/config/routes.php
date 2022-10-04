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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'BaseController';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'BaseController/login';
$route['dashboard'] = 'BaseController/dashboard';
$route['logout'] = 'BaseController/logout';

$route['create'] = 'BaseController/create';
$route['update'] = 'BaseController/update';
$route['delete/(:num)'] = 'BaseController/delete/$1';
$route['update/(:num)'] = 'BaseController/update/$1';



$route['registerSiswa'] = 'BaseController/registerSiswa';
$route['registerPegawai'] = 'BaseController/registerPegawai';
$route['kelas/(:num)'] = 'BaseController/kelas/$1';
$route['pembayaran/(:num)'] = 'BaseController/pembayaran/$1';


$route['createSiswa'] = 'BaseController/createSiswa';
$route['printPdfSiswa'] = 'BaseController/printPdfSiswa';
$route['updateSiswa'] = 'BaseController/updateSiswa';
$route['deleteSiswa/(:num)'] = 'BaseController/deleteSiswa/$1';
$route['updateSiswa/(:num)'] = 'BaseController/updateSiswa/$1';




$route['createJurusan'] = 'BaseController/createJurusan';
$route['printPdfJurusan'] = 'BaseController/printPdfJurusan';
$route['updateJurusan'] = 'BaseController/updateJurusan';
$route['deleteJurusan/(:num)'] = 'BaseController/deleteJurusan/$1';
$route['updateJurusan/(:num)'] = 'BaseController/updateJurusan/$1';



$route['createSpp'] = 'BaseController/createSpp';
$route['printPdfSpp'] = 'BaseController/printPdfSpp';
$route['connectSpp/(:num)'] = 'BaseController/connectSpp/$1';
$route['updateSpp'] = 'BaseController/updateSpp';
$route['deleteSpp/(:num)'] = 'BaseController/deleteSpp/$1';
$route['updateSpp/(:num)'] = 'BaseController/updateSpp/$1';



$route['createKelas'] = 'BaseController/createKelas';
$route['printPdfKelas'] = 'BaseController/printPdfKelas';
$route['updateKelas'] = 'BaseController/updateKelas';
$route['deleteKelas/(:num)/(:num)'] = 'BaseController/deleteKelas/$1/$2';
$route['updateKelas/(:num)/(:num)'] = 'BaseController/updateKelas/$1/$2';



$route['createPembayaran'] = 'BaseController/createPembayaran';
$route['printPdfPembayaran'] = 'BaseController/printPdfPembayaran';
$route['updatePembayaran'] = 'BaseController/updatePembayaran';
$route['deletePembayaran/(:num)/(:num)'] = 'BaseController/deletePembayaran/$1/$2';
$route['updatePembayaran/(:num)/(:num)'] = 'BaseController/updatePembayaran/$1/$2';


$route['createPetugas'] = 'BaseController/createPetugas';
$route['printPdfPetugas'] = 'BaseController/printPdfPetugas';
$route['updatePetugas'] = 'BaseController/updatePetugas';
$route['deletePetugas/(:num)'] = 'BaseController/deletePetugas/$1';
$route['updatePetugas/(:num)'] = 'BaseController/updatePetugas/$1';

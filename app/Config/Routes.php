<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\Dashboard;
use App\Controllers\Admin\Registration;
use App\Controllers\Admin\Userlogin;
use App\Controllers\Homepage;
use App\Controllers\Header\UploadController;
use App\Controllers\Fileserver;
use App\Controllers\Home;
/**
 * @var RouteCollection $routes
 */

//dashboard
$routes->get('/', [Dashboard::class, 'index'], ['filter' => 'AuthFilter']);


//admin register
$routes->get('/register', [Registration::class, 'index']);
$routes->post('/register', [Registration::class, 'processRegister']);

//admin login

$routes->get('/login', [Userlogin::class, 'index']);
$routes->post('/login', [Userlogin::class, 'loginAuth']);


//frontend
$routes->get('/home-page', [Homepage::class, 'index']);

//admin header-settings
$routes->get('/upload-form', [UploadController::class, 'index'],['as' => 'upload-form']);
$routes->post('/upload', [UploadController::class, 'upload']);
$routes->get('uploads/(:any)', [Fileserver::class, 'upload']);
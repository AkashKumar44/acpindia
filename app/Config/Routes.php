<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->match(['get', 'post'], '/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('admin/userlist', 'Home::indexw');
$routes->get('admin/usercommet', 'Home::usercommet');
$routes->get('admin/addimg', 'WebSiteInfo::adminiimgindex');
$routes->get('admin/client', 'WebSiteInfo::clientview');


$routes->match(['get', 'post'], 'WebSiteInfo/insert', 'WebSiteInfo::insert');
$routes->match(['get', 'post'], 'Home/userqu', 'Home::userqu');
$routes->match(['get', 'post'], 'Home/login_user', 'Home::login_user');
$routes->get('/', 'Home::index_record');
$routes->get('/userlogin', 'Home::userlogin');

// admin model and controller
$routes->get('/admin', 'Admin::admin');
// $routes->get('admin/userlist', 'Admin::index');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/logout', 'Admin::adminLogout');
$routes->match(['get', 'post'], 'admin/login', 'Admin::admin_login');

$routes->match(['get', 'post'], 'admin/addimginsert', 'WebSiteInfo::insert');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::signup');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::userlog');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

// $routes->match(['get', 'post'], 'userlist', 'Home::userlist');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

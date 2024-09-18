<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


$routes->match(['get', 'post'], 'login', 'Auth::login'); // LOGIN PAGE
$routes->match(['get', 'post'], 'register', 'Auth::register'); // REGISTER PAGE
$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
$routes->match(['get', 'post'], 'forgotpassword', 'Auth::forgotPassword'); // FORGOT PASSWORD
$routes->match(['get', 'post'], 'activate/(:num)/(:any)', 'Auth::activateUser/$1/$2'); // INCOMING ACTIVATION TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'resetpassword/(:num)/(:any)', 'Auth::resetPassword/$1/$2'); // INCOMING RESET TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'updatepassword/(:num)', 'Auth::updatepassword/$1'); // UPDATE PASSWORD
$routes->match(['get', 'post'], 'lockscreen', 'Auth::lockscreen'); // LOCK SCREEN
$routes->get('logout', 'Auth::logout'); // LOGOUT



/**
 * --------------------------------------------------------------------
 * SUPER ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '1'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,1'], function ($routes) {

	$routes->get('dashboard_superadmin', 'Superadmin::index'); // SUPER ADMIN DASHBOARD
	$routes->match(['get', 'post'], 'superadmin/profile', 'Auth::profile');
});



/**
 * --------------------------------------------------------------------
 * ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '2'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,2'], function ($routes) {

	$routes->get('dashboard2', 'Dashboard::index'); // ADMIN DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});


/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '3'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,3'], function ($routes) {

	$routes->get('dashboard3', 'Dashboard::index3'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '4'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,4'], function ($routes) {

	$routes->get('dashboard4', 'Dashboard::index4'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '5'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,5'], function ($routes) {

	$routes->get('dashboard5', 'Dashboard::index5'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '6'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,6'], function ($routes) {

	$routes->get('dashboard6', 'Dashboard::index6'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});
/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '7'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,7'], function ($routes) {

	$routes->get('dashboard7', 'Dashboard::index7'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '8'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,8'], function ($routes) {

	$routes->get('dashboard8', 'Dashboard::index8'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '9'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,9'], function ($routes) {

	$routes->get('dashboard9', 'Dashboard::index9'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});

/**
 * --------------------------------------------------------------------
 * EXTRA USER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '10'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,10'], function ($routes) {

	$routes->get('dashboard10', 'Dashboard::index10'); // DASHBOARD
	$routes->match(['get', 'post'], 'dashboard/profile', 'Auth::profile');
});


//print_r($routes);
//exit("AAAAAAAAAAAAAA");


$routes->get('search/(:segment)', 'Search::view/$1');
$routes->match(['get', 'post'], 'search/view/in/(:segment)', 'Search::view/in/$1');
$routes->get('search', 'Search::index');
//$routes->get('(:any)', 'Pages::view/$1');





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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

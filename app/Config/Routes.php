<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::home');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('map', 'Home::map');
$routes->get('register', 'Home::register');
$routes->get('signin', 'Home::signin');
$routes->post('signin', 'Home::signin_now');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('admindash', 'Home::admindash');

$routes->get('addbook', 'Home::addbook');
$routes->get('mybooks', 'Home::mybooks');
$routes->post('addbook', 'Home::addbook_now');

$routes->post('register', 'Home::submit_register');
// $routes->post('/Home/submit_register', 'Home::store');
$routes->get('alert', 'Home::alert');

$routes->get('logout', 'Home::logout');

$routes->get('welcome_message', 'Home::welcome_message');

$routes->get('sweetalert_notification', 'Home::sweetalert_notification');
//trying this
$routes->get('notification', 'MessageController::showSweetAlertMessages');

$routes->get('set-variable', 'ExampleController::setVariable');
$routes->get('email', 'Home::sendEmail');
$routes->get('email_template', 'Home::email_template');

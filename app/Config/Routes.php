<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('models/v125', 'ModelsController::v125');
$routes->get('models/x200', 'ModelsController::x200');
$routes->get('models/g350', 'ModelsController::g350');

$routes->get('ConnectionTest', 'ConnectionTest::index');
$routes->get('ConnectionTest/test', 'ConnectionTest::test');

$routes->post('Home/saveInquiry', 'Home::saveInquiry');
$routes->get('Home/saveInquiry', 'Home::saveInquiry');

$routes->post('Home/getModel', 'Home::getModel');





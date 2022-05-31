<?php



$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');



$router->get('about/culture', 'controllers/about-culture.php');



$router->post('names', 'controllers/add-name.php');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');


<?php

use App\Core\Request;
use App\Core\Router;

/** ======================================================= **/
require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';




// require 'routes.php';
// require $router->direct($uri);

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

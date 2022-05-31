<?php

use App\Core\App;

App::bind('config', require 'config.php');


App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

//  autoload with composer.json -> autoload => classmap


function view($name, $data = []) {

    extract($data);

    return require "app/views/{$name}.view.php";

}


function redirect($path) {

    return header("Location: /{$path}");
    
}
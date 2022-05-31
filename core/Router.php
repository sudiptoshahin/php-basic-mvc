<?php

namespace App\Core;

class Router {

    public $routes = [
        'GET'=> [],
        'POST'=> [],
    ];


    public static function load($file) {

        //  create the self instance
        $router = new static;

        require $file;
        return $router;
    }


    public function get($uri, $controller) {
        
        $this->routes['GET'][$uri] = $controller;

    }


    public function post($uri, $controller) {

        $this->routes['POST'][$uri] = $controller;
        
    }


    public function direct($uri, $requestType) {
        
        if (array_key_exists($uri, $this->routes[$requestType])) {

            //  PagesController@home
            // die($this->routes[$requestType][$uri]);

            // explode('@', $this->routes[$returnType][$uri])

            /****
             * ... -> will make those string into the functions argument
             * 
             */

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );

        }

        throw new Exception('No routes define for this routes');
    }


    public function callAction($controller, $action) {

        // die(var_dump($controller, $action));

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "($controller) does not respond to the ($action) action."
            );
        }

        return $controller->$action();
    }

}
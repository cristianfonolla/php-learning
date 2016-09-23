<?php


class Router {

    protected $routes = [];

    public function __construct($routes) {

        $this->routes = $routes;
    }

    public function direct($uri) {

        if ( array_key_exists($uri,$this->routes) ) {
            require $this->routes[$uri];
        } else {
            throw new Exception("No s'ha trobat la ruta");
        }



    }




}
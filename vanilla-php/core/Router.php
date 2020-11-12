<?php

class Router {
    protected $routes = [];
    
    public static function load($routes_file) {
        $router = new Router;
        require $routes_file;
        return $router;
    }

    public function define($routes) {
        $this->routes = $routes;
    }

    public function direct($uri) {
        if (array_key_exists($uri, $this->routes)) {
            // returns the controller
            return $this->routes[$uri];
        }

        throw new Exception("No route found for {$uri}");
    }
}


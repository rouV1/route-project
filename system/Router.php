<?php

namespace System;

class Router {
    private $routes = [];

    public function add($route, $action) {
        $this->routes[$route] = $action;
    }

    public function dispatch($url) {
        $url = trim($url, '/');
        if (array_key_exists($url, $this->routes)) {
            $action = $this->routes[$url];
            $controller = new $action[0];
            call_user_func([$controller, $action[1]]);
        } else {
            echo "404 Not Found";
        }
    }
}

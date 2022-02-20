<?php

namespace App\MVCPattern\Core;

use App\MVCPattern\Core\Route;
use Exception;

class Router
{
    protected $routes = [];

    protected $controllerNameSpace = 'App\MVCPattern\Controllers';

    public function loadRoutes($file)
    {
        if (!is_readable($file)) {
            throw new Exception("$file not found");
        }
        require $file;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function post($uri, $controller, $action)
    {
        $this->addRoutes('POST', $uri, $controller, $action);
    }

    public function get($uri, $controller, $action)
    {
        $this->addRoutes('GET', $uri, $controller, $action);
    }

    protected function addRoutes($method, $uri, $controller, $action)
    {
        $this->routes[] = new Route($method, $uri, $controller, $action);
    }

    public function handleRequest(Request $request)
    {
        $route = $this->getRoute($request->method(), $request->pathInfo());

        $controllerClass = $this->controllerNameSpace . "\\" . $route->controller();

        if (!class_exists($controllerClass)) {
            throw new Exception("$controllerClass not found.");
        }

        $controller = new $controllerClass();
        $controller->{$route->action()}($request);
    }

    public function getRoute($method, $pathInfo)
    {
        $currentRoute = null;

        foreach ($this->routes as $route) {
            if ($route->method() == $method && ($route->uri() == $pathInfo || '/' . $route->uri() == $pathInfo)) {
                $currentRoute = $route;
                break;
            }
        }

        if ($currentRoute === null) {
            throw new Exception("Path $method:$pathInfo not found.");
        }

        return $currentRoute;
    }
}

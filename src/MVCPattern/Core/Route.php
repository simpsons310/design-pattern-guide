<?php

namespace App\MVCPattern\Core;

class Route
{
    protected $method;

    protected $controller;

    protected $action;

    protected $uri;

    public function __construct($method, $uri, $controller, $action)
    {
        $this->method = $method;
        $this->controller = $controller;
        $this->action = $action;
        $this->uri = $uri;
    }

    public function method()
    {
        return $this->method;
    }

    public function controller()
    {
        return $this->controller;
    }

    public function action()
    {
        return $this->action;
    }

    public function uri()
    {
        return $this->uri;
    }
}

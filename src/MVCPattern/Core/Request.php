<?php

namespace App\MVCPattern\Core;

class Request
{
    protected $method;

    protected $uri;

    protected $pathInfo;

    protected $query;

    protected $request;

    protected $cookies;

    protected $files;

    protected $server;

    public function __construct()
    {
        $this->query = $_GET;
        $this->request = $_POST;
        $this->cookies = $_COOKIE;
        $this->files = $_FILES;
        $this->server = $_SERVER;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->pathInfo = $_SERVER['PATH_INFO'];
    }

    public function pathInfo()
    {
        return $this->pathInfo;
    }

    public function method()
    {
        return $this->method;
    }

    public function query()
    {
        return $this->query;
    }

    public function request()
    {
        return $this->request;
    }
}

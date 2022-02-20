<?php

namespace App\MVCPattern;

use App\MVCPattern\Core\Request;
use App\MVCPattern\Core\Router;

class Application
{
    protected $router;

    public function __construct()
    {
        $this->initializeSession();
        $this->loadRoutes();
    }

    protected function initializeSession()
    {
        session_start();
        // unset($_SESSION['data']);
        if (!isset($_SESSION['data'])) {
            $_SESSION['data'] = [];
        }
    }

    protected function loadRoutes()
    {
        $this->router = new Router();
        $this->router->loadRoutes(__DIR__ . "/routes/routes.php");
    }

    public function handleRequest(Request $request)
    {
        $this->router->handleRequest($request);
    }
}

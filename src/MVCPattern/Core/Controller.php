<?php

namespace App\MVCPattern\Core;

use Exception;

abstract class Controller
{
    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $parameters);
        } else {
            throw new Exception(sprintf('Method %s::%s does not exist.', static::class, $method));
        }
    }

    public function redirect($url)
    {
        header('Location: http://localhost:8181/run.php/' . $url, true, 302);
        exit();
    }
}

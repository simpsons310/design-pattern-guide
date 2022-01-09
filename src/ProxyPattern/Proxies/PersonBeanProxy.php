<?php

namespace App\ProxyPattern\Proxies;

use App\ProxyPattern\PersonBean;
use Exception;

class PersonBeanProxy
{
    protected $instance;

    protected $isOwner;

    public function __construct($name, $gender = 'male', $interest = null, $isOwner = false)
    {
        $this->instance = new PersonBean($name, $gender, $interest);
        $this->isOwner = $isOwner;
    }

    public function __call($name, $arguments)
    {
        if ($name === 'printInfo') {
            return call_user_func_array([$this->instance, $name], $arguments);
        }
        return $this->isOwner ? $this->callAsOwner($name, $arguments) : $this->callAsNonOwner($name, $arguments);
    }

    private function callAsOwner($name, $arguments)
    {
        if (substr($name, 0, 3) === 'get') {
            return call_user_func_array([$this->instance, $name], $arguments);
        } elseif ($name === 'setHotOrNotRating') {
            throw new Exception('Cannot set rating from owner proxy');
        } elseif (substr($name, 0, 3) === 'set') {
            return call_user_func_array([$this->instance, $name], $arguments);
        } else {
            return null;
        }
    }

    private function callAsNonOwner($name, $arguments)
    {
        if (substr($name, 0, 3) === 'get') {
            return call_user_func_array([$this->instance, $name], $arguments);
        } elseif ($name === 'setHotOrNotRating') {
            return call_user_func_array([$this->instance, $name], $arguments);
        } elseif (substr($name, 0, 3) === 'set') {
            throw new Exception('Cannot set information from non-owner proxy');
        } else {
            return null;
        }
    }
}

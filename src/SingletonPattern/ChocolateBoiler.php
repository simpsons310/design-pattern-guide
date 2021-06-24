<?php

namespace App\SingletonPattern;

class ChocolateBoiler
{
    private static $instance;
    private $empty;
    private $boiled;

    /**
     *  Construct is private to prevent direct construction calls with new operator
     */
    protected function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    /**
     * Class should not be cloneable
     */
    protected function __clone()
    {
        //
    }

    /**
     * Class should not be restorable from strings
     */
    protected function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton");
    }

    public static function getInstance(): ChocolateBoiler
    {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            echo "Filled boiler!\n";
        } else {
            echo "Boiler is not empty!\n";
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
            echo "Drained boiler!\n";
        } else {
            echo "Boiler is empty or not boiled!\n";
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
            echo "Boiled boiler!\n";
        } else {
            echo "Boiler is not empty or boiled!\n";
        }
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }
}

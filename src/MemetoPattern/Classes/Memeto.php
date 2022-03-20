<?php

namespace App\MemetoPattern\Classes;

use App\MemetoPattern\Interfaces\Memeto as MemetoInterface;

class Memeto implements MemetoInterface
{
    protected $state;

    protected $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    public function getState()
    {
        return $this->state;
    }

    public function getName()
    {
        return $this->date . '/ (' . substr($this->state, 0, 9) . '...)';
    }

    public function getDate()
    {
        return $this->date;
    }
}

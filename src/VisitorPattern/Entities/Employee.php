<?php

namespace App\VisitorPattern\Entities;

use App\VisitorPattern\Interfaces\Entity;
use App\VisitorPattern\Interfaces\Visitor;

class Employee implements Entity
{
    protected $name;

    protected $position;

    protected $salary;

    public function __construct(string $name, string $position, int $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitEmployee($this);
    }
}

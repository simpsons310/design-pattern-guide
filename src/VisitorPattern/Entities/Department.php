<?php

namespace App\VisitorPattern\Entities;

use App\VisitorPattern\Interfaces\Entity;
use App\VisitorPattern\Interfaces\Visitor;

class Department implements Entity
{
    protected $name;

    protected $employees = [];

    public function __construct($name, array $employees)
    {
        $this->name = $name;
        $this->employees = $employees;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    public function getCost()
    {
        return array_reduce($this->employees, fn ($carry, $item) => $carry += $item->getSalary(), 0);
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitDepartment($this);
    }
}

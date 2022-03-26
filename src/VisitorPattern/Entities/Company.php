<?php

namespace App\VisitorPattern\Entities;

use App\VisitorPattern\Interfaces\Entity;
use App\VisitorPattern\Interfaces\Visitor;

class Company implements Entity
{
    private $name;

    private $departments;

    public function __construct($name, array $departments)
    {
        $this->name = $name;
        $this->departments = $departments;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDepartments()
    {
        return $this->departments;
    }

    public function getCost()
    {
        return array_reduce($this->departments, fn ($carry, $item) => $carry += $item->getCost(), 0);
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitCompany($this);
    }
}

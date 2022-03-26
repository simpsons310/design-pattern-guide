<?php

namespace App\VisitorPattern\Interfaces;

interface Entity
{
    public function accept(Visitor $visitor);
}

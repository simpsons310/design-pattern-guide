<?php

namespace App\BuilderPattern;

use App\BuilderPattern\Builders\AbstractBuilder;
use App\BuilderPattern\Builders\VacationBuilder;

class Planner
{
    public function __construct()
    {
        $builder = new AbstractBuilder();
        $vacation = new VacationBuilder($builder);

        $vacation->buildDayOne();
        $vacation->getBuilder()->getVacationPlanner();

        $vacation->buildDayTwo();
        $vacation->getBuilder()->getVacationPlanner();

        $vacation->buildDayThree();
        $vacation->getBuilder()->getVacationPlanner();
    }
}

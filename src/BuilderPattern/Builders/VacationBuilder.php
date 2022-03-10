<?php

namespace App\BuilderPattern\Builders;

class VacationBuilder
{
    protected $builder;

    public function __construct(AbstractBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildDayOne()
    {
        $this->builder->buildDay('2022-03-10');
        $this->builder->addHotel('Grand Facadian');
        $this->builder->addTickets('Admission');
        $this->builder->addReservation('Dinner');
    }

    public function buildDayTwo()
    {
        $this->builder->buildDay('2022-03-11');
        $this->builder->addHotel('Grand Facadian');
        $this->builder->addTickets('Admission');
        $this->builder->addSpecialEvent('Patterns on Ice');
        $this->builder->addReservation('Dinner');
    }

    public function buildDayThree()
    {
        $this->builder->buildDay('2022-03-12');
        $this->builder->addHotel('Grand Facadian');
        $this->builder->addTickets('Admission');
        $this->builder->addSpecialEvent('Cirque Du Patterns');
    }

    public function getBuilder()
    {
        return $this->builder;
    }
}

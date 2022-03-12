<?php

namespace App\BuilderPattern\Interfaces;

interface Builder
{
    public function buildDay($date);

    public function addHotel($hotel);

    public function addReservation($reservation);

    public function addSpecialEvent($event);

    public function addTickets($ticket);

    public function getVacationPlanner();
}

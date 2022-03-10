<?php

namespace App\BuilderPattern\Builders;

use App\BuilderPattern\Interfaces\Builder;

class AbstractBuilder implements Builder
{
    protected $date;

    protected $hotel;

    protected $reservation;

    protected $specialEvent;

    protected $ticket;

    public function __construct()
    {
        $this->reset();
    }

    public function buildDay($date)
    {
        $this->date = $date;
    }

    public function addHotel($hotel)
    {
        $this->hotel = $hotel;
    }

    public function addReservation($reservation)
    {
        $this->reservation = $reservation;
    }

    public function addSpecialEvent($event)
    {
        $this->specialEvent = $event;
    }

    public function addTickets($ticket)
    {
        $this->ticket = $ticket;
    }

    public function reset()
    {
        $this->date = null;
        $this->hotel = null;
        $this->reservation = null;
        $this->specialEvent = null;
        $this->ticket = null;
    }

    public function getVacationPlanner()
    {
        echo "Plan for date: " . $this->date . "\n";
        if ($this->hotel) {
            echo "- Hotel: " . $this->hotel . "\n";
        }
        if ($this->reservation) {
            echo "- Reservation: " . $this->reservation . "\n";
        }
        if ($this->specialEvent) {
            echo "- Special Event: " . $this->specialEvent . "\n";
        }
        if ($this->ticket) {
            echo "- Ticket: " . $this->ticket . "\n";
        }
        echo "----------------------------------\n";
        $this->reset();
    }
}

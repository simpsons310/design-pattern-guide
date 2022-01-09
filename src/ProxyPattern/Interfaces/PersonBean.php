<?php

namespace App\ProxyPattern\Interfaces;

interface PersonBean
{
    public function getName();

    public function getGender();

    public function getInterests();

    public function getHotOrNotRating();

    public function setName(string $name);

    public function setGender(string $gender);

    public function setInterests(string $interests);

    public function setHotOrNotRating(int $rating);
}

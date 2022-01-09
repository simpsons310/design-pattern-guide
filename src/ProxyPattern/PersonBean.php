<?php

namespace App\ProxyPattern;

use App\ProxyPattern\Interfaces\PersonBean as PersonBeanInterface;

class PersonBean implements PersonBeanInterface
{
    protected $name;

    protected $gender;

    protected $interests;

    protected $rating;

    protected $ratingCount = 0;

    public function __construct($name, $gender, $interests)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->interests = $interests;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getInterests()
    {
        return $this->interests;
    }

    public function getHotOrNotRating()
    {
        return $this->ratingCount > 0 ? ($this->rating / $this->ratingCount) : 0;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function setInterests(string $interests)
    {
        $this->interests = $interests;
    }

    public function setHotOrNotRating(int $rating)
    {
        $this->rating += $rating;
        $this->ratingCount++;
    }

    public function printInfo()
    {
        echo $this->name . ', ' . $this->gender . ', like ' . $this->interests . "\n";
    }
}

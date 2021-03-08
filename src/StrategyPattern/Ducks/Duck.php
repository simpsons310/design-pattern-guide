<?php

namespace App\StrategyPattern\Ducks;

use App\StrategyPattern\Interfaces\FlyBehaviorInterface;
use App\StrategyPattern\Interfaces\QuackBehaviorInterface;

abstract class Duck
{
    protected $flyBehavior;

    protected $quackBehavior;

    public function __construct(
        FlyBehaviorInterface $flyBehavior,
        QuackBehaviorInterface $quackBehavior
    ) {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performSwim()
    {
        echo "All ducks float, even decoys!";
    }

    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}

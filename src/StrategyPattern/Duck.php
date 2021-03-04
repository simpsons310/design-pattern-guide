<?php

use FlyBehavior;
use QuackBehavior;

class Duck
{
    protected $flyBehavior;

    protected $quackBehavior;

    public function __construct(
        FlyBehavior $flyBehavior,
        QuackBehavior $quackBehavior
    ) {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

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
}

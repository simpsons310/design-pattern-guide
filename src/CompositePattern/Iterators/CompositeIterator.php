<?php

namespace App\CompositePattern\Iterators;

use App\CompositePattern\Interfaces\Iterator;
use App\CompositePattern\Menu\Menu;
use SplStack;

class CompositeIterator implements Iterator
{
    protected $stack;

    public function __construct(Iterator $iterator)
    {
        $this->stack = new SplStack();
        $this->stack->push($iterator);
    }

    public function next()
    {
        if ($this->hasNext()) {
            $iterator = $this->stack->top();
            $component = $iterator->next();
            if ($component instanceof Menu) {
                $this->stack->push($component->createIterator());
            }
            return $component;
        } else {
            return null;
        }
    }

    public function hasNext()
    {
        if ($this->stack->isEmpty()) {
            return false;
        } else {
            $iterator = $this->stack->top();
            if (!$iterator->hasNext()) {
                $this->stack->pop();
                return $this->hasNext();
            } else {
                return true;
            }
        }
    }
}

<?php

namespace App\CompositePattern\Iterators;

use App\CompositePattern\Interfaces\Iterator;

class MenuIterator implements Iterator
{
    protected $items = [];

    protected $position = 0;

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function next()
    {
        return $this->items[$this->position++];
    }

    public function hasNext()
    {
        return isset($this->items[$this->position]);
    }

    public function add($item)
    {
        $this->items[] = $item;
    }

    public function remove($item)
    {
        foreach ($this->items as $index => $component) {
            if ($component == $item) {
                unset($this->items[$index]);
            }
        }
    }

    public function get($i)
    {
        return $this->items[$i];
    }
}

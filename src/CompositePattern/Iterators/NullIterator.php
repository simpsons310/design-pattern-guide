<?php

namespace App\CompositePattern\Iterators;

use App\CompositePattern\Interfaces\Iterator;

class NullIterator implements Iterator
{
    public function next()
    {
        return null;
    }

    public function hasNext()
    {
        return false;
    }
}

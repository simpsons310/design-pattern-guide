<?php

namespace App\FlyweightPattern\Factories;

use App\FlyweightPattern\FlyWeights\Tree;

class TreeFactory
{
    protected $treeArray = [];

    protected $treeData;

    public function __construct(array $treeData)
    {
        $this->treeData = $treeData;

        foreach ($treeData as $tree) {
            $this->treeArray[$this->getKey($tree)] = new Tree($tree[0], $tree[1], $tree[2]);
        }
    }

    protected function getKey($treeData)
    {
        return $treeData[0] . '_' . $treeData[1];
    }

    public function displayTrees()
    {
        foreach ($this->treeArray as $tree) {
            $tree->display();
        }
    }
}

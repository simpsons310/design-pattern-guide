<?php

namespace App\MVCPattern\Core;

use Exception;

abstract class Model
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->setModel();
        if (!isset($_SESSION['data'][$this->model])) {
            $_SESSION['data'][$this->model] = [
                'data' => [],
                'increment' => 1
            ];
        }
    }

    abstract protected function setModel();

    public function getAll()
    {
        return $_SESSION['data'][$this->model]['data'];
    }

    public function get($id)
    {
        if (!isset($_SESSION['data'][$this->model]['data'][$id])) {
            throw new Exception("Model not found with id = $id");
        }
        return $_SESSION['data'][$this->model]['data'][$id];
    }

    public function create($data)
    {
        $_SESSION['data'][$this->model]['data'][$this->getIncrement()] = $data;
        $this->increment();
    }

    public function update($id, $data)
    {
        $oldData = $this->get($id);
        $_SESSION['data'][$this->model]['data'][$id] = array_merge($oldData, $data);
    }

    public function delete($id)
    {
        if (!isset($_SESSION['data'][$this->model]['data'][$id])) {
            throw new Exception("Model not found with id = $id");
        }
        unset($_SESSION['data'][$this->model]['data'][$id]);
    }

    protected function getIncrement()
    {
        return $_SESSION['data'][$this->model]['increment'];
    }

    protected function increment()
    {
        $_SESSION['data'][$this->model]['increment']++;
    }
}

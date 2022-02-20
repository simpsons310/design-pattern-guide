<?php

$this->get('', 'HomeController', 'index');
$this->get('list', 'DataController', 'list');
$this->get('get', 'DataController', 'get');
$this->get('create', 'DataController', 'createForm');
$this->get('update', 'DataController', 'updateForm');
$this->post('create', 'DataController', 'create');
$this->post('update', 'DataController', 'update');
$this->post('delete', 'DataController', 'delete');

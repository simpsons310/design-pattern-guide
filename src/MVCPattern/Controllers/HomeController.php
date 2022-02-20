<?php

namespace App\MVCPattern\Controllers;

use App\MVCPattern\Core\Controller;
use App\MVCPattern\Core\View;

class HomeController extends Controller
{
    public function index()
    {
        View::render('home.php');
    }
}

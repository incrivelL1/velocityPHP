<?php
// App\Controller\Home.php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    public function index()
    {
        $this->loadView("home");
    }

    public function contato()
    {
        $this->loadView("contato");
    }
}
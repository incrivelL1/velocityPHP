<?php
// App\Controller\Home.php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    public function index()
    {
        echo "Controller: HOME - Método: INDEX - BASE URL: " . baseUrl();
    }
}
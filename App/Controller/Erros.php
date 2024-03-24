<?php
//App\Controller\Erros.php

use App\Library\ControllerMain;

class Erros extends ControllerMain
{
    /**
     * controllerNotFound
     *
     * @return void
     */
    public function controllerNotFound()
	{
        echo "Controller não localizado.";
    }

    /**
     * methodNotFound
     *
     * @return void
     */
    public function methodNotFound()
    {
        echo "Método não localizado no controller";
    }
}
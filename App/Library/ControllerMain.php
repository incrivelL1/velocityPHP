<?php

namespace App\Library;

class ControllerMain
{
    public $dados;

    /**
     * construct
     *
     * @param array $dados 
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
        $this->loadHelper("Ambiente");
    }

    /**
     * loadHelper
     *
     * @param string $nome 
     * @return void
     */
    public function loadHelper($nome)
    {
        $nameFile = ".." . DS . "App" . DS . "Helper" . DS . "{$nome}.php";

        if (file_exists($nameFile)) {
            require_once $nameFile;
        }
    }
}
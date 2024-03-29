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

    /**
     * loadView
     *
     * @param string $nomeView 
     * @param array $dados 
     * @param bool $exibeCabRodape 
     * @return void
     */
    public function loadView($nomeView, $dados = [], $exibeCabRodape = true)
    {
        $this->dados    = $dados;
        $caminho        = ".." . DS . "App" . DS . "View" . DS;

        // carrega o cabeçalho
        if ($exibeCabRodape) {
            require_once $caminho . 'comuns' . DS . "cabecalho.php";
        }

        if (file_exists($caminho . $nomeView . ".php")) {
            require_once $caminho . $nomeView . ".php";
        } else {
            require_once $caminho . "comuns" . DS . "erros.php";
        }

        // carrega o rodape
        if ($exibeCabRodape) {
            require_once $caminho . 'comuns' . DS . "rodape.php";
        }
    }
}
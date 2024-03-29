<?php

use App\Library\ControllerMain;

class  Categoria extends ControllerMain
{
    public function index()
    {
        $dados = [
            ["id" => 10, "descricao" => "Televisores", "statusRegistro" => "Ativo"],
            ["id" => 20, "descricao" => "Computadores", "statusRegistro" => "Inativo"]
        ];

        $this->loadView("restrita/listaCategoria", $dados);
    }
}
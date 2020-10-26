<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex04;

class Ex04Controller extends Controller
{
    public function index()
    {
        $dados["view"] = "Index";
        $this->load("04/Index", $dados);
    }

    public function salario()
    {
        $objEx04 = new Ex04();

        $nome     = $_POST["nome"];
        $idade    = $_POST["idade"];
        $salario  = $_POST["salario"];
        $cargo    = $_POST["cargo"];

        $dados["nome"] = $nome;
        $dados["idade"] = $idade;
        $dados["salario"] = $salario;
        $dados["cargo"] = $cargo;

        $dados["bruto"] = $objEx04->bruto($salario);
        $dados["liquido"]=$objEx04->liquido($salario);

        $dados["view"] = "Index";
        $this->load("04/Index", $dados);
    }
}

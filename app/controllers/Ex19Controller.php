<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex19;

class Ex19Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("19/Index", $dados);
    }

    public function salario(){
        $objEx19 = new Ex19();

        $nome = $_POST["nome"];
        $dep = $_POST["dep"];
        $salario = $_POST["salario"];
        
        $dados["liquido"] = $objEx19->liquido($dep, $salario);
        $dados["ir"] = $objEx19->ir($dep, $salario);
        $dados["nome"]=$nome;
        $dados["dep"]=$dep;
        $dados["salario"]=$salario;

        $dados["view"] = "Index";
        $this->load("19/Index", $dados);
    }
    
}

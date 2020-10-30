<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex17;

class Ex17Controller extends Controller
{
    public function index()
    {
        $dados["view"] = "Index";
        $this->load("17/Index", $dados);
    }

    public function salario(){
        $objEx17 = new Ex17();

        $salario = $_POST["salario"];
        $tempo   = $_POST["tempo"];
        

        $dados["bonus"] = $objEx17->bonus($salario, $tempo);
        $dados["salario"] = $objEx17->novoSalario($salario, $tempo);
        
        $dados["view"] = "Index";
        $this->load("17/Index", $dados);
    }
    
}

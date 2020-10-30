<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex14;

class Ex14Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("14/Index", $dados);
    }

    public function par(){
        $objEx14 = new Ex14();

        $valor = $_POST["valor"];
        $dados["resultado"]=$objEx14->par($valor);
        $dados["valor"] = $valor;

        $dados["view"] = "Index";
        $this->load("14/Index", $dados);
    }
    
}

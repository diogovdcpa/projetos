<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex15;

class Ex15Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("15/Index", $dados);
    }

    public function maiormenor(){
        $objEx15 = new Ex15();

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        $dados["resultado"] = $objEx15->maiormenor($n1,$n2);
        $dados["n1"] = $n1;
        $dados["n2"] = $n2;

        $dados["view"] = "Index";
        $this->load("15/Index", $dados);
    }
    
}

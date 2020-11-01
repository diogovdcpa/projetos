<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex20;

class Ex20Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("20/Index", $dados);
    }

    public function media(){
        $objEx20 = new Ex20();

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        
        $dados["resultado"] = $objEx20->media($n1,$n2,$n3,$n4);
        
        $dados["view"] = "Index";
        $this->load("20/Index", $dados);
    }
    
}

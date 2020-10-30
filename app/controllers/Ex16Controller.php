<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex16;

class Ex16Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("16/Index", $dados);
    }

    public function comparar(){
        $objEx16 = new Ex16();

        $v1 = $_POST["v1"];
        $v2 = $_POST["v2"];
        $v3 = $_POST["v3"];

        $dados["resultado"] = $objEx16->comparar($v1,$v2,$v3);
        $dados["v1"] = $v1;
        $dados["v2"] = $v2;
        $dados["v3"] = $v3;

        $dados["view"] = "Index";
        $this->load("16/Index", $dados);
    }
    
}

<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex18;

class Ex18Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("18/Index", $dados);
    }

    public function triangulo(){
        $objEx18 = new Ex18();

        $l1 = $_POST["l1"];
        $l2 = $_POST["l2"];
        $l3 = $_POST["l3"];
        
        $dados["resultado"] = $objEx18->triangulo($l1,$l2,$l3);
        
        $dados["view"] = "Index";
        $this->load("18/Index", $dados);
    }
    
}

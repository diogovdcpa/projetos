<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex21;

class Ex21Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("21/Index", $dados);
    }

    public function area(){
        $objEx21 = new Ex21();

        $total = $_POST["total"];
        $construida = $_POST["construida"];
        
        
        $dados["valor"] = $objEx21->area($total,$construida);
        $dados["total"] = $total;
        $dados["construida"] = $construida;
        
        $dados["view"] = "Index";
        $this->load("21/Index", $dados);
    }
    
}

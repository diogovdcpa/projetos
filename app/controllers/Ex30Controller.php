<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex30;

class Ex30Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("30/Index", $dados);
    }

    public function cep(){
        $objEx30 = new Ex30();

        $cod = $_POST["cod"];
        
        $dados["resultado"] = $objEx30->cep($cod);
        $dados["cod"] = $cod;
        
        $dados["view"] = "Index";
        $this->load("30/Index", $dados);
    }
    
}

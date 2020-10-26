<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex05;

class Ex05Controller extends Controller
{
    public function index()
    {
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("05/Index", $dados);
    }

    public function temperatura()
    {
        $objEx05 = new Ex05();

        $grau = $_POST["grau"];
        $dados["resultado"] = $objEx05->temperatura($grau);
        $dados["grau"] = $grau;

        $dados["view"] = "Index";
        $this->load("05/Index", $dados);
        
    }
}

<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Ex06;

class Ex06Controller extends Controller{
    public function index(){
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("06/Index",$dados);
    }

    public function lampada(){
        $objEx06 = new Ex06();

        $pot = $_POST["pot"];
        $comprimento = $_POST["comprimento"];
        $altura = $_POST["altura"];

        $dados["resultado"] = $objEx06->lampada($pot,$comprimento,$altura);
        $dados["pot"] = $pot;
        $dados["comprimento"] = $comprimento;
        $dados["altura"] = $altura;

        $dados["view"] = "Index";
        $this->load("06/Index",$dados);

    }
}
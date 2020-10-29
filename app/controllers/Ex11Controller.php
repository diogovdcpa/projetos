<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ex11;

class Ex11Controller extends Controller {
    public function index(){
        $dados["view"] = "Index";
        $this->load("11/Index",$dados);
    }

    public function salario(){
        $objEx11 = new Ex11();

        $valor=$_POST["valor"];
        
        $dados["resultado"] = $objEx11->salario($valor);
        $dados["valor"] = $valor;

        $dados["view"] = "Index";
        $this->load("11/Index",$dados);
    }
}
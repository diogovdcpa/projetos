<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ex12;

class Ex12Controller extends Controller{
    public function index(){
        $dados["resultado"] = null;
        $dados["view"] = "Index";
        $this->load("12/Index",$dados);
    }
    public function salario(){
        $objEx12 = new Ex12();

        $qtd = $_POST["qtd"];
        $valor = $_POST["valor"];

        $dados["resultado"] = $objEx12->salario($qtd,$valor);
        $dados["qtd"] = $qtd;
        $dados["valor"] = $valor;

        $dados["view"] = "Index";
        $this->load("12/Index",$dados);
    }
};

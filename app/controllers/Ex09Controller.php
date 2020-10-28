<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ex09;

class Ex09Controller extends Controller {
    public function index(){
        $dados["view"] = "Index";
        $this->load("09/Index",$dados);
    }

    public function carro(){
        $objEx09 = new Ex09();

        $preco = $_POST["preco"];
        $plucro = $_POST["plucro"];
        $pimposto = $_POST["pimposto"];

        $dados["lucro"] = $objEx09->lucro($preco,$plucro);
        $dados["impostos"] = $objEx09->impostos($preco,$pimposto);
        $dados["total"] = $preco + $dados["lucro"] + $dados["impostos"];
        $dados["preco"] = $preco;
        $dados["plucro"] = $plucro;
        $dados["pimposto"] = $pimposto;

        $dados["view"] = "Index";
        $this->load("09/Index",$dados);
    }
}
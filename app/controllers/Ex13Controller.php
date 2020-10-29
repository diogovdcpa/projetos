<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ex13;

class Ex13Controller extends Controller{
    public function index(){
        $dados["view"] = "Index";
        $this->load("13/Index",$dados);
    }

    public function taxista(){
        $objEx13 = new Ex13();

        $inicio = $_POST["inicio"];
        $fim = $_POST["fim"];
        $venda = $_POST["venda"];
        $litros = $_POST["litros"];

        $dados["media"] = $objEx13->media($inicio,$fim,$litros);
        $dados["lucro"] = $objEx13->lucro($litros,$venda);

        $dados["inicio"] = $inicio;
        $dados["fim"] = $fim;
        $dados["venda"] = $venda;
        $dados["litros"] = $litros;

        $dados["view"] = "Index";
        $this->load("13/Index",$dados);
    }
}
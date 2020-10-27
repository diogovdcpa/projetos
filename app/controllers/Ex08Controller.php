<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ex08;

class Ex08Controller extends Controller{
    public function index(){
        $dados["view"]="Index";
        $this->load("08/Index",$dados);
    }

    public function salario(){
        $objEx08 = new Ex08();

        $nome = $_POST["nome"];
        $dep = $_POST["dep"];
        $horas = $_POST["horas"];

        $dados["bruto"] = $objEx08->bruto($horas,$dep);
        $dados["inss"] = $objEx08->inss($horas,$dep);
        $dados["ir"] = $objEx08->ir($horas,$dep);

        $dados["liquido"] = $dados["bruto"] - $dados["inss"] - $dados["ir"];

        $dados["nome"] = $nome;

        $dados["view"]="Index";
        $this->load("08/Index",$dados);

    }
}
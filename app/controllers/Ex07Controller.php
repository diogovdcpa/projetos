<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Ex07;

class Ex07Controller extends Controller{
    public function index(){

        $dados["resultado"] = null;
        $dados["view"] = "index";
        $this->load("07/Index",$dados);
    }

    public function gerente(){
        $objEx07 = new Ex07();

        $valor = $_POST["valor"];
        $dados["resultado"] = $objEx07->gerente($valor);

        $dados["valor"] = $valor;
        $dados["view"] = "index";
        $this->load("07/Index",$dados);
    }

    
}
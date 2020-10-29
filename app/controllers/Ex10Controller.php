<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ex10;

class Ex10Controller extends Controller{
    public function index(){
        $dados["view"] = "Index";
        $this->load("10/Index",$dados);
    }

    public function media(){
        $objEx10 = new Ex10();

        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];
        $p3 = $_POST["p3"];

        $dados["resultado"] = $objEx10->media($p1,$p2,$p3);
        $dados["p1"] = $p1;
        $dados["p2"] = $p2;
        $dados["p3"] = $p3;

        $dados["view"] = "Index";
        $this->load("10/Index",$dados);
    }
}
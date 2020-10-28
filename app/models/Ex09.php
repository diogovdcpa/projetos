<?php
namespace app\models;
use app\core\Model;

class Ex09 {
    public function lucro($preco,$plucro){
        return $preco * $plucro/100;
    }

    public function impostos($preco, $impostos){
        return $preco * $impostos / 100;
    }
}
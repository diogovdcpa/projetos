<?php
namespace app\models;
use app\core\Model;

class Ex14 {
    public function par($valor){
        if($valor%2==0){
            return "PAR";
        }else{
            return "IMPAR";
        }
    }
}
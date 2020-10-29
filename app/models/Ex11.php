<?php
namespace app\models;
use app\core\Model;

class Ex11{
    public function salario($valor){
        return 800 + (0.15 * $valor);
    }
}
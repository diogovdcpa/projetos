<?php
namespace app\models;
use app\core\Model;

class Ex07 {
    public function gerente($valor){
        $inteira = intval($valor/3);
        return $valor - (3 * $inteira) + $inteira;
    }
}
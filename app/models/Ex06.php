<?php

namespace app\models;

use app\core\Model;

class Ex06 {
    public function lampada($pot,$comprimento,$altura){
        $area = $comprimento * $altura;
        $potencia = $area * 18;
        return $potencia/$pot;
    }
}
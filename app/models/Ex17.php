<?php

namespace app\models;

use app\core\Model;

class Ex17
{
    public function bonus($salario, $tempo)
    {
        $taxa = ($tempo >=5)? 0.20 : 0.10;
        return $salario * $taxa;
    }

    public function novoSalario($salario, $tempo){
        $bonus = $this->bonus($salario, $tempo);
        return $salario + $bonus;
    }
}

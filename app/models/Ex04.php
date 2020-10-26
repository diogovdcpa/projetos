<?php

namespace app\models;

use app\core\Model;

class Ex04
{
    public function bruto($salario)
    {
        $reajuste = 0.38 * $salario;
        $gratificacao = 0.20 * $salario;
        $total = $salario + $reajuste + $gratificacao;

        return $total;
    }

    public function liquido($salario)
    {
        $desconto = 0.15 * $this->bruto($salario);
        return $desconto;
    }
}

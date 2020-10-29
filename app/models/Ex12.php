<?php

namespace app\models;

use app\core\Model;

class Ex12
{
    public function salario($qtd, $valor)
    {
        return 500+(0.10 * $valor)+(50*$qtd);
    }
}

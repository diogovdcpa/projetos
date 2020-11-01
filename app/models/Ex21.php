<?php

namespace app\models;

use app\core\Model;

class Ex21
{
    public function area($total,$construida)
    {
        $vazia = $total * $construida;
        return ($construida * 5) + ($vazia * 3.8);
    }
}

<?php

namespace app\models;

use app\core\Model;

class Ex05
{
    public function temperatura($grau)
    {
        return 5 * ($grau - 32)/9;
    }
}

<?php

namespace app\models;

use app\core\Model;

class Ex30
{
    public function cep($cod)
    {
        switch ($cod) {
            case '1':
                return "Nordeste";
                break;

            case '2':
                return "Pará";
                break;

            default:
                return "Importado";
                break;
        };
    }
}

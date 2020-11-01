<?php

namespace app\models;

use app\core\Model;

class Ex19
{
    public function liquido($dep, $salario)
    {
        return $salario - 600 * $dep;
    }

    public function ir($dep, $salario){
        $liquido = $this->liquido($dep, $salario);

        if($liquido<=10000){
            $ir = 0;
        }else if($liquido > 10000 && $liquido <=30000){
            $ir = 0.05;
        }else if($liquido > 30000 && $liquido <=60000){
            $ir = 0.10;
        }else{
            $ir = 0.15;
        }
        return $ir * $liquido;
    }
}

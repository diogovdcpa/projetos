<?php

namespace app\models;

use app\core\Model;

class Ex18
{
    public function triangulo($l1, $l2, $l3)
    {
        $resultado = "";
        if(($l1<$l2+$l3)&&($l2<$l1+$l3)&&($l3<$l2+$l1)){
            $resultado =  "É um Triangulo";
            if($l1==$l2 && $l2==$l3){
                $resultado .= "Equilatero";
            }elseif($l1!=$l2 && $l2!=$l3 && $l1!=$l3){
                $resultado .= "Escaleno";
            }else{
                $resultado .= "Isoceles";
            }
        }else{
            $resultado = "Não é um Triangulo";
        }
        return $resultado;
    }
}

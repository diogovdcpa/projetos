<?php

namespace app\models;

use app\core\Model;

class Ex16
{
    public function comparar($v1, $v2, $v3)
    {
        if($v1==$v2 && $v2==$v3){
            return "Todos os valores sao iguais";
        }

        if($v1!=$v2 && $v1!=$v3 && $v2!=$v3){
            return "Todos os valores sao diferentes";
        }

        if(($v1==$v2 && $v1!=$v3)||($v1==$v3 && $v1!=$v2)||($v2==$v3 && $v1!=$v2)){
            return "Existem Valores Iguais";
        }
    }
}

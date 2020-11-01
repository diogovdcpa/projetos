<?php

namespace app\models;

use app\core\Model;

class Ex20
{
    public function media($n1,$n2,$n3,$n4)
    {
        $media = ($n1 + $n2 + $n3 + $n4)/4;
        if($media >=7){
            return "Aprovado com média ". $media;
        }else{
            return "Reprovado com média ". $media;
        }
    }
}

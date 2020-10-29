<?php
namespace app\models;
use app\core\Model;

class Ex13 {
    public function media($inicio,$fim,$litros){
        return ($fim - $inicio)/$litros;
    }

    public function lucro($litros,$venda){
        $preco_combustivel = 4;
        return $venda - ($litros * $preco_combustivel);
    }
}
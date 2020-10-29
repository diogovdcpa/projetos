<?php
namespace app\models;
use app\core\Model;

class Ex10 {
    public function media($p1,$p2,$p3){
        return ($p1 * 2 + $p2 * 3 + $p3 * 5)/10;
    }
}
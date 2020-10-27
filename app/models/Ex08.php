<?php
namespace app\models;
use app\core\Model;

class Ex08 {
    public function bruto($horas,$dep){
        return 12 * $horas + 40 * $dep;
    }

    public function inss($horas,$dep){
        return 0.085 * $this->bruto($horas,$dep);
    }

    public function ir($horas,$dep){
        return 0.05 * $this->bruto($horas,$dep);
    }
   
}
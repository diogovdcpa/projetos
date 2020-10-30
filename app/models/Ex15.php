<?php
namespace app\models;
use app\core\Model;

class Ex15 {
    public function maiormenor($n1,$n2){
      if($n1>$n2){
          return ">";
      }else{
          return "<";
      }
    }
}
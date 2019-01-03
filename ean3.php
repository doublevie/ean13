<?php

$gen = rand(100,22323);
print $gen;
class EAN13G  {

  public $generate = rand(100,22323);

  function reg() {
    $spl = str_split($this->generate);
      $ca = $spl[1] + $spl[3] +$spl[5] +$spl[7] +$spl[9] + $spl[11];
      $cb = $spl[0] + $spl[2] + $spl[4] +$spl[6] +$spl[8] +$spl[10];
      $ret =  ($ca * 3 )+ $cb;
      $rg = (ceil($ret / 10) * 10) - $ret;
      return $this->generate .''. $rg;
  }
}


//$x = new EAN13G();
// $x->generate = '613043000485';
//print_r($x->reg());

 ?>

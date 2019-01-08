<?php


class EAN13G  {

  public $barcode = '';

  function __construct() {
        $this->barcode = rand('200000000000','209999999999');
    }

function regenerate(){
	$this->__construct();
}

  function output() {
      return  $this->barcode  . ''.$this->fix() ;
  }

  function fix (){
 $spl = str_split($this->barcode);
      $ca = $spl[1] + $spl[3] +$spl[5] +$spl[7] +$spl[9] + $spl[11];
      $cb = $spl[0] + $spl[2] + $spl[4] +$spl[6] +$spl[8] +$spl[10];
      $ret =  ($ca * 3 )+ $cb;
      $rg = (ceil($ret / 10) * 10) - $ret;
      return  $rg;
  }

 

}


$x = new EAN13G();
//  $x->generate = '613043000485';
//  $x->generate = '613043000485';
print $x->output() ;
 $x->regenerate();
 print '<br>' ;
 print $x->output() ;
 
 ?>

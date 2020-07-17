<?php

function clock(){
  $h = $m = 00;
  while($h <= 23){
    while($m <= 59){
       echo ($h < 10 ? '0' . $h : $h) . ':' . ($m < 10 ? '0' . $m : $m) . '<br>';
       $m++;
    }
    $h++;
    $m = 00;
  }
}

clock();
?>

<?php

function somaArray($array) {
  $soma = 0;
  
  for($i = 0; $i < sizeof($array); $i++) {
    $soma += $array[$i];
  }
  return $soma;
}

$arr = array(2,4);

echo somaArray($arr);



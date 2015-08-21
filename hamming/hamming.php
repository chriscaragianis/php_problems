<?php

function distance($a, $b) {

  if (strlen($a) != strlen($b)) {
    throw new InvalidArgumentException('DNA strands must be of equal length.');
  }

  $count = 0;
  $a_split = preg_split("//", $a); 
  $b_split = preg_split("//", $b); 

  while (list($key, $value) = each($a_split)) {
    if ($value != $b_split[$key]) {
      $count++;
    }
  }

  return $count;

}

<?php

function abbrevName($name)
{
  $names = explode(' ', ucwords($name));
  return $names[0][0] . '.' . $names[1][0];
}

function summation($n){
  return array_sum(range(1,$n));
}

print_r(summation(8));
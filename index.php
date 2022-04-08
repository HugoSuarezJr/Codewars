<?php

// Abbreviates name into initials (e.g., Hugo Suarez => H.S).
function abbrevName($name)
{
  $separateNames = explode(' ', ucwords($name));
  return $separateNames[0][0] . '.' . $separateNames[1][0];
}

// Returns the summation of a given number (e.g., 4 => 1+2+3+4 = 10).
function summation($n){
  return array_sum(range(1,$n));
}


// Determines if a number is Even or Odd (e.g. 12 => Even).
function even_or_odd(int $n): string {
  return $n % 2 ? 'Odd' : 'Even';
}

function smash(array $words): string {
  return implode(' ', $words);
}

function maps($x)
{
  return array_map(function($n) {
    return $n * 2;
  }, $x);
}

$arr = [1,2,3];

var_dump(maps($arr));
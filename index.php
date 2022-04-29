<?php

// Abbreviates name into initials (e.g., Hugo Suarez => H.S).

use function PHPSTORM_META\map;

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

// Combine array of string into one string seperated by spaces.
function smash(array $words): string {
  return implode(' ', $words);
}

// return an array of integers doubled by itself.
function maps($x)
{
  return array_map(function($n) {
    return $n * 2;
  }, $x);
}

// Expects 2 integers and the determines if they are opposites of even and odd.
function lovefunc($flower1, $flower2) {
if($flower1 % 2 === 0 && $flower2 % 2 !== 0){
  return true;
} elseif($flower2 % 2 === 0 && $flower1 % 2 !== 0) {
  return true;
}
  return false;
}

//Better variation of lovefunc
function lovefunc2(int $flower1, int $flower2) : bool {
  return ($flower1 % 2 !== $flower2 % 2);
}

function countPositivesSumNegatives($input) {
 
  $newPositiveArr = array_filter($input, function($n){
    if($n>0){
      return $n;
    }
  });

  $newNegativeArr = array_filter($input, function($n){
    if($n<0){
      return $n;
    }
  });

  return array_merge([count($newPositiveArr)], [array_sum($newNegativeArr)]);
}

// Sloppy correct() function
// function correct($string) {
//   return implode(array_map(function ($l){
//   if($l==='5'){
//     return 'S';
//   } elseif ($l==='0'){
//     return 'O';
//   } elseif ($l==='1'){
//     return 'I';
//   }
//   return $l;
// }, str_split($string)));
// }

// Best correct() function

function correct($string){
  return str_replace(['5', '1', '0'], ['S', 'I', 'O'], $string);
}

// Sum function just sums up the integers in a given array and return zero if array is empty.
function sum(array $a): float {
  return array_sum($a);
}

function greet(){
  $world = "beautiful";
  
  if($world === "beautiful"){
    return "hello world!"; 
  }
  return "goodbye world :(";
}

function toJadenCase($string) 
{
  return ucwords($string);
}
$jSmithQuote = "If a book store never runs out of a certain book, does that mean that nobody reads it, or everybody reads it";

function divisors($n) {
  $count = 0;
  for($i=1; $i<=$n; $i++){
    if(fmod($n, $i) == 0.0 ){
      $count++;
    }
  }
  return $count;
}

function DNA_strand($dna) {
  return  join(array_map(function ($strand){
    switch($strand){
      case "A":
        return "T";
      case "T":
        return "A";
      case "C":
        return "G";
      case "G":
       return "C";
    }
  }, str_split($dna)));
}

// Better way to code above function
function DNA_strand2($dna) {
  return strtr($dna, 'ACGT', 'TGCA');
}

$time_start = microtime(true); 

//sample script
// echo join(array_map(function ($strand){
//   switch($strand){
//     case "A":
//       return "T";
//     case "T":
//       return "A";
//     case "C":
//       return "G";
//     case "G":
//      return "C";
//   }
// }, str_split("AACCGGTT")));

echo strtr("AACCGGTT", 'ACGT', 'TGCA');

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start)/60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.number_format((float) $execution_time, 10).' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 

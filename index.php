<?php

function abbrevName($name)
{
  $names = explode(' ', ucwords($name));
  
  return $names[0][0] . '.' . $names[1][0];
}

var_dump(abbrevName("hugo suarez"));
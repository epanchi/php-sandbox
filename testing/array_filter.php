<?php
//Filter the values of an array using a callback function:


// impar
function test_odd($var)
  {
    // Bitwise Operators 
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
/**
 * Array
(
    [0] => 1
    [1] => 3
    [3] => 3
)
 */

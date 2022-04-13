<?php 

/**
 * Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order. 
 * For example: if the input string is "Hello World and Coders" then your program should return the string sredoC dna dlroW olleH.
 */

function FirstReverse($str) {
   $response='';
   for($i=1;$i<=strlen($str);$i++){
     $response.=substr($str, strlen($str)-$i,1);
   }
   
  // code goes here
  return $response;

}
   
// keep this function call here  
 echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>
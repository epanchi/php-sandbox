<?php
/**
 * The value of the variable input is a string 1,2,3,4,5,6,7. How would you get the sum of the 
 * integers contained inside input?π
 */

$input='1,2,3,4,5,6,7,8,9,10,A';

echo array_sum(explode(',',$input));
?>
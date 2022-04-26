<?php
$a = '1';
$b = &$a; //1
$b = "2$b";
echo $a.", ".$b;


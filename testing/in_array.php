<?php

// Example array

$array = array(
    'egg' => true,
    'cheese' => false,
    'hair' => 765,
    'goblins' => null,
    'ogres' => 'no ogres allowed in this array'
);

// Loose checking -- return values are in comments

// First three make sense, last four do not

in_array(null, $array); // true
in_array(false, $array); // true
in_array(765, $array); // true
in_array(763, $array); // true
in_array('egg', $array); // true
in_array('hhh', $array); // true
in_array(array(), $array); // true

// Strict checking

in_array(null, $array, true); // true
in_array(false, $array, true); // true
in_array(765, $array, true); // true
in_array(763, $array, true); // false
in_array('egg', $array, true); // false
in_array('hhh', $array, true); // false
in_array(array(), $array, true); // false

?>
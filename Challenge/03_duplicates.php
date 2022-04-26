<?php
function findDuplicates($integerArray)
{
    $tempArray = $integerArray;
    // Verify each element
    $repetead = [];
    foreach ($integerArray as $index => $item) {
        if (in_array($item, $repetead)) {
            continue;
        }
        unset($tempArray[$index]);
        if (in_array($item, $tempArray)) {
            array_push($repetead, $item);
        }
    }
    return $repetead;
}

function duplicates($array)
{
    $response = [];
    foreach (array_count_values($array) as $index => $item) {
        if ($item > 1)
            array_push($response, $index);
    }
    return $response;
}
$array = [3, 3, 2, 1, 1, 3, 4, 4, 8];

print_r(findDuplicates($array));
print_r(duplicates($array));


/**
$ php -f 03_duplicates.php 
        Array
        (
            [0] => 3
            [1] => 1
            [2] => 4
        )
        Array
        (
            [0] => 3
            [1] => 1
            [2] => 4
        )
 
 */

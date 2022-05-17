<?php
// Obtain a list of columns
foreach ($data as $key => $row) {
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// you can use array_column() instead of the above code
$volume  = array_column($data, 'volume');
$edition = array_column($data, 'edition');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);
?>
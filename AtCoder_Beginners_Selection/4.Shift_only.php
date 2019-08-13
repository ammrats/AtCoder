<?php

function checkArray($count = 0, $array)
{
    $is_odd = false;
    foreach ($array as $i) {
        if ($i % 2 == 1) {
            $is_odd = true;
        }
    }
    if ($is_odd) {
        return $count;
    }

    $count++;
    $new_array = [];
    foreach ($array as $i) {
        $new_array[] = ($i / 2);
    }

    return checkArray($count, $new_array);
}

$input = [];
while ($line = trim(fgets(STDIN))) {
   $input[] = trim($line);
}

$count = 0;
$array = explode(' ', $input['1']);

echo checkArray($count, $array);

<?php
fscanf(STDIN, '%d %d %d', $num, $lower_limit, $upper_limit);
$count = 0;
$results = [];
for ($i = 1; $i <= $num; $i++) {
    $sum = array_sum(str_split($i));
    if (
        $lower_limit <= $sum &&
        $sum <= $upper_limit
    ) {
        $results[] = $i;
    }
}

echo array_sum($results);

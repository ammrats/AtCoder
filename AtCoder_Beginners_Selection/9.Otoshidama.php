<?php
fscanf(STDIN, '%d %d', $num, $total);

for ($i = 0; $i <= $num; $i++) {
    for ($j = 0; $j <= $num; $j++) {
        $k = ($num - $i - $j);
        if (
            $k >= 0 &&
            (($i * 10000) + ($j * 5000) + ($k * 1000)) == $total
        ) {
            echo $i . ' ' . $j . ' ' . $k;
            exit;
        }
    }
}

echo -1 . ' ' . -1 . ' ' . -1;

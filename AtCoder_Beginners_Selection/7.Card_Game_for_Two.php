<?php
$num = trim(fgets(STDIN));
$cards = explode(' ', trim(fgets(STDIN)));
rsort($cards);

$a = [];
$b = [];

for ($i = 1; $i <= $num; $i++) {
    if ($i % 2 == 1) {
        $a[] = array_shift($cards);
    } else {
        $b[] = array_shift($cards);
    }
}

echo (array_sum($a) - array_sum($b));

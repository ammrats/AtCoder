<?php
$num = (int)trim(fgets(STDIN));

$diameters = [];
for ($i = 1; $i <= $num; $i++) {
    $diameters[] = (int)trim(fgets(STDIN));
}

$count = 0;
$standard_diameter = max($diameters) + 1;
rsort($diameters);
for ($i = 1; $i <= $num; $i++) {
    $diameter = array_shift($diameters);
    if ($standard_diameter = $diameter) {
        continue;
    } elseif ($standard_diameter > $diameter) {
        $standard_diameter = $diameter;
        $count++;
    } else {
        break;
    }
}

echo $count;

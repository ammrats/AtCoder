<?php
$array = str_split(trim(fgets(STDIN)));;
$count = 0;
foreach ($array as $i) {
    if ($i == 1) {
        $count++;
    }
}
echo $count;

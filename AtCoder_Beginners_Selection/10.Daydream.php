<?php

function checkString($str)
{
    $dream = 'dream';
    $dreamer = 'dreamer';
    $erase = 'erase';
    $eraser = 'eraser';

    if (
        0 === strpos($str, $dreamer) &&
        0 === preg_match('/^dreamerase/', $str)
    ) {
        $str = preg_replace('/^dreamer/', '', $str);
    } elseif (0 === strpos($str, $dream)) {
        $str = preg_replace('/^dream/', '', $str);
    } elseif (0 === strpos($str, $eraser)) {
        $str = preg_replace('/^eraser/', '', $str);
    } elseif (0 === strpos($str, $erase)) {
        $str = preg_replace('/^erase/', '', $str);
    }

    if ($str == '') {
        return 'YES';
    } elseif (
        0 === strpos($str, $dreamer) ||
        0 === strpos($str, $dream) ||
        0 === strpos($str, $eraser) ||
        0 === strpos($str, $erase)
    ) {
        return checkString($str);
    } else {
        return 'NO';
    }
}

echo checkString(trim(fgets(STDIN)));

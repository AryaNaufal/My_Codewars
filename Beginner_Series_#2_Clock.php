<?php
function past($h, $m, $s)
{
    // your code here
    $h = $h * 60 * 60;
    $m = $m * 60;
    $s = $s * 1;
    return ($h + $m + $s) * 1000;
}

var_dump(past(0, 1, 1));

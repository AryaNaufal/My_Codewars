<?php
function checkForFactor($base, $factor)
{
    // your code here
    return $base % $factor == 0;
}

print_r(checkForFactor(10, 2));
print_r(checkForFactor(9, 2));

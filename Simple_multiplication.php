<?php
function simpleMultiplication($number)
{
    // your code goes here
    if ($number % 2 == 0) {
        return $number * 8;
    } else {
        return $number * 9;
    }
}

echo "result: ";
print_r(simpleMultiplication(2));

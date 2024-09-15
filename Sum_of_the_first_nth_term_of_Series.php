<?php
function series_sum($n)
{
    // Your code here
    $sum = 0;
    $denominator = 1;

    for ($i = 0; $i < $n; $i++) {
        $sum += 1 / $denominator;
        $denominator += 3;
    }

    return number_format($sum, 2);
}

print_r(series_sum(1) . "\n");
print_r(series_sum(2) . "\n");
print_r(series_sum(3) . "\n");
print_r(series_sum(4) . "\n");
print_r(series_sum(5) . "\n");

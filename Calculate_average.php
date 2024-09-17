<?php
function find_average($array): float
{
    // Write your code here
    if (empty($array)) {
        return 0;
    }

    $average = array_sum($array) / count($array);

    return $average;
    // return number_format($average, 2);
}

print_r(find_average([]));
print_r(find_average([1, 1, 1]));
print_r(find_average([1, 2, 3]));
print_r(find_average([1, 2, 3, 4]));

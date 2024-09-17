<?php
function odd_or_even(array $a): string
{
    // Your code here
    return array_sum($a) % 2 ? 'odd' : 'even';
}

print_r(odd_or_even([0]));
echo "\n";
print_r(odd_or_even([2, 5, 34, 6]));
echo "\n";
print_r(odd_or_even([0, -1, -5]));

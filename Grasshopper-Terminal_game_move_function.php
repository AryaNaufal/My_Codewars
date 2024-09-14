<?php
function move($pos, $roll)
{
    // your code here
    return $roll * 2 + $pos;
}

echo "result 1: ";
print_r(move(0, 4));
echo "\n";

echo "result 2: ";
print_r(move(3, 6));
echo "\n";

echo "result 3: ";
print_r(move(2, 5));
echo "\n";
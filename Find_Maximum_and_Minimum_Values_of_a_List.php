<?php
function maximum($array)
{
    // Your code here
    return max($array);
}
function minimum($array)
{
    // Your code here
    return min($array);
}


echo "result max: ";
print_r(maximum([1, 2, 3, 4, 5]));
echo "\n";

echo "result min: ";
print_r(minimum([1, 2, 3, 4, 5]));
echo "\n";

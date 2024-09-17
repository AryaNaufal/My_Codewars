<?php
function descendingOrder(int $n): int
{
    // Replace with your code
    $result = [];

    for ($i = 0; $i < strlen($n); $i++) {
        $result[] = substr($n, $i, 1);
    }

    rsort($result);
    return (int) implode('', $result);
}

print_r(descendingOrder(15));
echo "\n";
print_r(descendingOrder(123456789));

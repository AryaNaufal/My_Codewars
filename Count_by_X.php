<?php

function countBy($x, $n)
{
    $z = [];

    for ($i = 1; $i <= $n; $i++) {
        $z[] = $x * $i;
    }

    return $z;
}

print_r(countBy(1, 5));
print_r(countBy(2, 5));

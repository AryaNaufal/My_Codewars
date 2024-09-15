<?php

function betterThanAverage($classPoints, $yourPoints)
{
    // Your code here

    $sum = 0;
    for ($i = 0; $i < count($classPoints); $i++) {
        $sum += $classPoints[$i];
    }

    return $sum / count($classPoints) < $yourPoints ? true : false;
}

print_r(betterThanAverage([2, 3], 5));
echo "\n";
print_r(betterThanAverage([25, 250], 50));

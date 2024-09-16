<?php
function countPositivesSumNegatives($input)
{
    $positiveCount = 0;
    $negativeCount = 0;

    if (empty($input)) {
        return [];
    }

    foreach ($input as $value) {
        if ($value > 0) {
            $positiveCount++;
        } elseif ($value < 0) {
            $negativeCount += $value;
        }
    }

    return [$positiveCount, $negativeCount];
}

print_r(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));

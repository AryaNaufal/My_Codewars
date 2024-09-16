<?php
function zeroFuel($distanceToPump, $mpg, $fuelLeft)
{
    // Your code goes here.
    return $fuelLeft * $mpg >= $distanceToPump;
}

print_r(zeroFuel(50, 25, 2));
print_r(zeroFuel(100, 50, 1));

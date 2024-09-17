<?php
function XO($s)
{
    $result = strtolower($s);

    $count_x = substr_count($result, 'x');
    $count_o = substr_count($result, 'o');

    return $count_x === $count_o;
}

print_r(XO('xo'));
print_r(XO('xxxoo'));
print_r(XO("zpzpzpp"));

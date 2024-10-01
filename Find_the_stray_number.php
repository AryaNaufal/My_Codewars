<?php
function stray($arr)
{
    return $arr[array_search(max($arr), $arr)];
}


print_r(stray([1, 1, 2]));
print_r(stray([4, 2, 2, 2, 2]));
print_r(stray([4, 4, 4, 5, 4, 4, 4]));

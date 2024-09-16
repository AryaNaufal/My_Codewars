<?php
function lovefunc($flower1, $flower2)
{
    // moment of truth
    return ($flower1 + $flower2) % 2 == 1 ?  true :  false;
}

print_r(lovefunc(1, 4));
print_r(lovefunc(2, 2));

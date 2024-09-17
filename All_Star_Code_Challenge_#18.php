<?php
function strCount($str, $letter)
{
    // code here
    return substr_count($str, $letter);
}

print_r(strCount('Hello', 'o'));
print_r(strCount('Hello', 'l'));
print_r(strCount('', 'z'));

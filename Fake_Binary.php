<?php
function fake_bin(string $s): string
{
    // Write your code here
    $ans = str_split($s);
    $result = [];

    for ($i = 0; $i < count($ans); $i++) {
        $ans[$i] < 5 ? $result[] = "0" : $result[] = "1";
    }
    return implode("", $result);
}

print_r(fake_bin("45385593107843568"));

<?php
function getMiddle($text)
{
    $length = strlen($text);

    if ($length % 2 == 0) {
        return substr($text, $length / 2 - 1, 2);
    } else {
        return substr($text, $length / 2, 1);
    }
}

print_r(getMiddle('test'));
print_r(getMiddle('middle'));
print_r(getMiddle('A'));

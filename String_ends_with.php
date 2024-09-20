<?php
function solution($str, $ending)
{
    // TODO: complete

    // if (substr($str, -strlen($ending)) === $ending || $ending === '') {
    //     return "true";
    // } else {
    //     return "false";
    // }

    // best practice
    return str_ends_with($str, $ending);

}


print_r(solution('abcde', 'cde'));
print_r(solution('abcde', 'abc'));
print_r(solution('kitten', 'ten'));
print_r(solution('yes this will pass', ''));
print_r(solution('this will not pass', '`^$<>()[]*|'));
print_r(solution("abc\n", 'abc'));

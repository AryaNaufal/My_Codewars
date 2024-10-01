<?php
function getGrade($a, $b, $c)
{
    // your code here
    $avg = ($a + $b + $c) / 3;

    // if ($avg >= 90) {
    //     return 'A';
    // } elseif ($avg >= 80) {
    //     return 'B';
    // } elseif ($avg >= 70) {
    //     return 'C';
    // } elseif ($avg >= 60) {
    //     return 'D';
    // } else {
    //     return 'F';
    // }

    // switch ($avg) {
    //     case $avg >= 90:
    //         return 'A';
    //     case $avg >= 80:
    //         return 'B';
    //     case $avg >= 70:
    //         return 'C';
    //     case $avg >= 60:
    //         return 'D';
    //     default:
    //         return 'F';
    // }

    return match (true) {
        $avg >= 90 => 'A',
        $avg >= 80 => 'B',
        $avg >= 70 => 'C',
        $avg >= 60 => 'D',
        default => 'F',
    };
}

print_r(getGrade(70, 50, 75));

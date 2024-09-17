<?php
function feast($beast, $dish)
{
    # Write your code here
    if ($beast[0] == $dish[0] && $beast[strlen($beast) - 1] == $dish[strlen($dish) - 1]) {
        return "true";
    }
    return "false";
}

print_r(feast("great blue heron", "garlic naan"));
echo "\n";
print_r(feast("brown bear", "bear claw"));

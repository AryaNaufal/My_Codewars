<?php

function setAlarm(bool $employed, bool $vacation): bool
{
    // your code here
    return $employed && !$vacation;
}

print_r(setAlarm(false, true));
print_r(setAlarm(true, false));

<?php
function string_to_array($s)
{
    return explode(" ", $s);
}

print_r(string_to_array("I was walking my dog 1 day"));

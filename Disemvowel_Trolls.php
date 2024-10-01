<?php
function disemvowel($string)
{

    // Code goes here...
    $vowel = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    for ($i = 0; $i < strlen($string); $i++) {
        if(in_array($string[$i], $vowel)) {
            $string = str_replace($string[$i], '', $string);
            $i = 0;
        }       
    }

    return $string;
}

print_r(disemvowel("This website is for losers LOL!"));

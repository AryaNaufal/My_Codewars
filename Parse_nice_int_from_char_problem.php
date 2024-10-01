<?php
function getAge($response)
{
    // return correct age (int). Happy coding :) 
    
    // if(preg_match('/\d+/', $response, $matches)) {
    //     return (int)$matches[0];
    // }

    return $response[0];
}

print_r(getAge("3 years old"));

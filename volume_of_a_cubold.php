<?php
function get_volume_of_cuboid($length, $width, $height)
{
    // Your code here
    return  $length * $width * $height;
}

echo "result: ";
print_r(get_volume_of_cuboid(1, 2, 2));

<?php
function bmi($weight, $height)
{
    $bmi = $weight / pow($height, 2);

    // if ($bmi <= 18.5) return "Underweight";
    // elseif ($bmi <= 25.0) return "Normal";
    // elseif ($bmi <= 30.0) return "Overweight";
    // elseif ($bmi > 30) return "Obese";
    // return "";

    return match (true) {
        $bmi <= 18.5 => 'Underweight',
        $bmi <= 25.0 => 'Normal',
        $bmi <= 30.0 => 'Overweight',
        $bmi > 30 => 'Obese',
    };
}

print_r(bmi(81, 1.80));

<?php

function positive_sum($numbers)
{
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number > 0) {
            $sum += $number;
        }
    }

    return $sum;
}

// another solution
// function positive_sum($number)
// {
//     return array_sum(array_filter($number, function ($number) {
//         return $number > 0;
//     }));
// }


var_dump(positive_sum([-1, 2, 3, -3]));

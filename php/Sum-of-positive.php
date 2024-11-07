<?php

function positiveSum($numbers)
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
// function positiveSum($number)
// {
//     return array_sum(array_filter($number, function ($number) {
//         return $number > 0;
//     }));
// }


var_dump(positiveSum([-1, 2, 3, -3]));

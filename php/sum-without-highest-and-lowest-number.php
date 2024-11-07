<?php

function sumArray(array $numbers)
{
    if (!$numbers || count($numbers) <= 2)
        return 0;

    $highestNum = $numbers[0];
    $lowestNum  = $numbers[0];
    $sum        = $numbers[0];

    for ($i = 1; $i < count($numbers); $i++) {

        if ($numbers[$i] > $highestNum)
            $highestNum = $numbers[$i];

        if ($numbers[$i] < $lowestNum)
            $lowestNum = $numbers[$i];

        $sum += $numbers[$i];
    }

    $sum -= $highestNum + $lowestNum;

    return $sum;
}

var_dump(sumArray([10, 2, 1, 1, 100, 20]));

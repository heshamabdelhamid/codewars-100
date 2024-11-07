<?php



function repeatStr($n, $str)
{
    $newStr = "";

    for ($i = 0; $i < $n; $i++) {
        $newStr .= $str;
    }

    return $newStr;
}


var_dump(repeatStr(4, "hi"));

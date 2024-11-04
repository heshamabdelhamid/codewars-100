<?php

$result = fn($number) => $number % 2 == 0 ? "Even" : "Odd";

echo $result(2);

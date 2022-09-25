<?php

$arrayNumber1 = [
    5,
    6,
    2,
    8,
    9,
    1,
    3,
    7,
    5,
    6,
];

$arrayNumber2 = [
    5,
    6,
    23,
    83,
    94,
    12,
    31,
    77,
    56,
    61,
];

$result = [];

for ($i = 0; $i <= count($arrayNumber1); $i++) {

    $c = $arrayNumber1[$i] * $arrayNumber2[$i];
    array_push($result, $c);
}
;

print_r($result);

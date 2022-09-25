<?php

$epithets = [
    "космического",
    "бесконечного",
    "безудержного",
    "наилучшого",
    "постоянного",
];
$wishes = [
    "терпения",
    "здоровья",
    "воображения",
    "богатства",
    "изобилия",
    "процветания",
];

$user = readline("Привет как тебязовут ? ");

function get_rand_elem($arr)
{

    $randKey = array_rand($arr);

    foreach ($arr as $elem => $value) {
        if ($randKey == $elem) {
            return $value;
        }
        ;
    }
};



print "Дорогой " . $user . ",
от всего сердца поздравляю тебя с днем рождения,
желаю " . get_rand_elem($epithets) . " " . get_rand_elem($wishes) . ",
" . get_rand_elem($epithets) . " " . get_rand_elem($wishes) . "
и " . get_rand_elem($epithets) . " " . get_rand_elem($wishes) . " !";

// echo "Дорогой $user,
// от всего сердца поздравляю тебя с днем рождения,
// желаю $test($epithets) $test($wishes),
// $testand($epithets) $test($wishes) и $test($epithets) $test($wishes)";

<?php 

placeToReturn:

echo "В каком году произошло крещение Руси?.\n Варианты :\n A-810\n В-710\n С-610\n D-510\n";



$answer  = readline('Ваш вариант отвента ? (A, B, C, или D ?) '); 
// спрашиваем вариант ответа . Предположим он будет "А"

switch($answer) {
    case $answer === 'A' || $answer === "a" :
        echo 'Совершенно верно ! Поздравляю !';
        break;
    case $answer === 'B' || $answer === "b" 
      || $answer === 'C' || $answer === "c" 
      || $answer === 'D' || $answer === "d" :
        echo "К сожелению не верно ! ";
        break;

    default:
        echo 'Значение не соответствует предложенным вариантам !';
        echo "\n";
        goto placeToReturn;
         
    
};
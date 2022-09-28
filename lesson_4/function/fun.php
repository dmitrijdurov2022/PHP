<?php 

$anonimFunc = function($el) {
   return print $el % 2 ? " Не четное ".  $el. "\n" : " Четное " . $el . "\n";
};

function maxMinAvg($el): array {
     $resultArray[] =(int) $arrayMin = min($el)."\n";
     $resultArray[] = (int) $arrayMax = max($el)."\n";
     $resultArray[] = (float) $avg = array_sum($el) / count($el);
     return $resultArray;
} ; 
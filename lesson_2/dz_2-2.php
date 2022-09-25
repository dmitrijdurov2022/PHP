<?php


$user = readline("Привет как тебязовут ? "); //спрашиваем как зовут
$task = readline(" $user Сколько задачь вы хотите заплонировать на сегодня ? ") ;
 // спрашиваем сколько задачь хотят заплонировать

$arrayTask = [] ; //создаем массив с задачами
$arrayTime =[]; //создаем масив с временем на задачи


for ($i=1; $i <= $task ; $i++) { // запускаем цикл с вопросами
    $someTask = readline("Какая задача № $i ? "); //спрашиваем какая задача
    $someTaskTime = readline("Сколько времени нужно на выполнение задачи № $i ? "); //сколько нужно времени
    array_push($arrayTask, $someTask) ; // заполняем массив с задачами
    array_push($arrayTime, $someTaskTime) ; // заполняем массив с временем на задачи
    
    
};

$combine = array_combine($arrayTask, $arrayTime); // склееваем два масива

function get_sum($arr) { // функция для подсчета общего времени на задачи
    $sum = 0;
    foreach($arr as $elem)
        $sum += $elem;
    return $sum;
}


$sumTaskTaim = get_sum($arrayTime); // создаем переменную с общим временем на задачи


foreach($combine as $taskKey => $taskValue) {
    echo "-Задача $taskKey потребует $taskValue.ч ,\n";
     // перебераем массив и выводим номер задачи и время на выполнение
}

echo " У вас заплонированно $task задачи на $sumTaskTaim.ч !"; // выводим общую информацию

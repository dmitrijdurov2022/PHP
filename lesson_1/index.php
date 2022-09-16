<?php
$user = readline("Привет как тебязовут ? ");
// $age = readline("Сколько тебе лет ? ");
// echo "Вас зовут $user, вам $age лет. ";

echo "$user заплонируйте на сегодня три задачи \n";
$task1 = readline('Какая первая задача на сегодня ? ');
$task1Time = readline('Сколько времени нужно на выполнение первой задачи ? ');
$task2 = readline('Назовите вторую задачу на сегодня ? ');
$task2Time = readline('Сколько времени нужно на выполнение второй задачи ? ');
$task3 = readline('Назовите третью задачу на сегодня ? ');
$task3Time = readline('Сколько времени нужно на выполнение третьей задачи ? ');

echo "$user, сегодня у вас заплонированно 3 приоритетных задачи на день:
    - $task1 ($task1Time.ч)
    - $task2 ($task2Time.ч)
    - $task3 ($task3Time.ч) \n";

$taskTime = $task1Time + $task2Time + $task3Time;   

echo "Примерное время выполнения плана = $taskTime.ч";
<meta charset="UTF-8">

<?php

/*
Написати функцію, яка приймає на вхід масив із студентами формату [0 => [‘surname’ => ‘Іванов’, ‘name’ => ‘Іван’],
[1 => [‘surname’ => ‘Сидорчук’, ‘name’ => ‘Петро’]]…
Вивести: Прізвище Ім’я (довжина прізвища)…
Використовувати стандартні функції
*/

    $arrayRandSurname = ["Іванов", "Петров", "Сидоров", "Косарєв"];
    $arrayRandName = ["Петро", "Іван", "Коля", "Ваня"];

    function arrayStudents($arrayRandSurname, $arrayRandName){
        if (count($arrayRandName) === count($arrayRandSurname)){

            $arrayResult = array_combine($arrayRandSurname, $arrayRandName);
            ksort($arrayResult);

            function printResult($arrayResult){

                foreach ($arrayResult as $key => $value){
                    yield $key . " " . $value . " (" . strlen(utf8_decode($key)) . ")";
                }

            }

            foreach (printResult($arrayResult) as $value){
                echo $value . "<br>";
            }

        }
        else{
            echo "Warning!";
        }
    }

    arrayStudents($arrayRandSurname, $arrayRandName);

?>
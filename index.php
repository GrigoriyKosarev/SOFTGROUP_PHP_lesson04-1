<meta charset="UTF-8">

<?php

/*
Написати функцію, яка приймає на вхід масив із студентами формату [0 => [‘surname’ => ‘Іванов’, ‘name’ => ‘Іван’],
[1 => [‘surname’ => ‘Сидорчук’, ‘name’ => ‘Петро’]]…
Вивести: Прізвище Ім’я (довжина прізвища)…
Використовувати стандартні функції
*/

    $arrayStudents[0]["surname"]="Іванов";
    $arrayStudents[0]["name"]   ="Петро";

    $arrayStudents[1]["surname"]="Петров";
    $arrayStudents[1]["name"]   ="Іван";

    $arrayStudents[2]["surname"]="Сидоров";
    $arrayStudents[2]["name"]   ="Коля";

    $arrayStudents[3]["surname"]="Косарєв";
    $arrayStudents[3]["name"]   ="Григорій";

    function setStudents($arrayStudents){

        function printResult($arrayStudents){

             for ($i = 0; $i < 4; $i++){
                 yield $arrayStudents[$i]["surname"] . " " . $arrayStudents[$i]["name"] . " (" . strlen(utf8_decode($arrayStudents[$i]["surname"])) . ")";
              }

        }

        foreach (printResult($arrayStudents) as $value){
            echo $value . "<br>";
        }

    }

    setStudents($arrayStudents);

?>
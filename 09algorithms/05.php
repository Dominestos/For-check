<?php
/*Классическое задание на склонение окончания слова в зависимости от числа.
Создайте переменную $studentsCount и присвойте ей случайное значение от 1 до 1000000.
Создайте программу, которая выведет в нужной форме текстовое сообщение.
Например: "На учёбе 100 студентов", "На учебе 2 студента" и т. д.
*/
$studentsCount = rand(1, 1000000);

if($studentsCount >= 11 && $studentsCount <= 14){
    echo "На учёбе $studentsCount студентов.";
}elseif(($studentsCount - ((intval($studentsCount / 10)) * 10)) >= 2 && ($studentsCount - ((intval($studentsCount / 10)) * 10)) <= 4){
    echo "На учёбе $studentsCount студента.";
}elseif(($studentsCount - ((intval($studentsCount / 10)) * 10)) === 1){
    echo "На учёбе $studentsCount студент.";
}else{
    echo "На учёбе $studentsCount студентов.";
}

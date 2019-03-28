<?php
/*Создание сокращенного варианта ФИО.
Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
1 - с использованием только функций для работы со строками
2 - с использованием массивом*/

$name= 'Иванов Иван Петрович';

$lern = mb_strlen($name);//20
$my_number2 = mb_strrpos($name, ' ');//11
$one_p = mb_strimwidth($name, $my_number2, $lern-$my_number2); //Петрович
$name = mb_strimwidth($name, 0, $my_number2); //Иванов Иван
$result_therd = mb_substr($one_p, 1,1);//П

$my_number1 = mb_strrpos($name, ' ');//6
$two_p = mb_strimwidth($name, $my_number1, $my_number2-$my_number1);//Иван
$result_two = mb_substr($two_p,1,1);//И
$sername = mb_strimwidth($name, 0, $my_number1);//Иванов


echo $sername.' '.$result_two.'.'.$result_therd.'.'. '<br>';

//2 - с использованием массивом:



$name2= 'Иванов Иван Петрович';
$delitel = ' ';
$name_arrey = explode($delitel, $name2);


$two_a = mb_substr($name_arrey[1], 0,1);
$three_a = mb_substr($name_arrey[2], 0,1);

echo "$name_arrey[0] $two_a.$three_a.<br>";



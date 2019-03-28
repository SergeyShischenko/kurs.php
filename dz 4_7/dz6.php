<?php
/* ДЗ № 6 Многомерный массив необходимо отсортировать. Сортировка по двум полям, при этом должна быть возможность сортировать в обратном порядке: `age` - по возрастанию, `gender` - по убыванию. Сам массив:*/

$array = array(
    'a1' => array('id'=>'1', 'age'=>'16', 'gender'=>'m', 'login'=>'Вася'),
    'a2' => array('id'=>'2', 'age'=>'18', 'gender'=>'m', 'login'=>'Петя'),
    'a3' => array('id'=>'3', 'age'=>'20', 'gender'=>'g', 'login'=>'Катя'),
    'a4' => array('id'=>'4', 'age'=>'20', 'gender'=>'m', 'login'=>'Стас'),
    'a5' => array('id'=>'5', 'age'=>'12', 'gender'=>'g', 'login'=>'Маша'),
    'a6' => array('id'=>'6', 'age'=>'44', 'gender'=>'g', 'login'=>'Галя'),
    'a7' => array('id'=>'7', 'age'=>'45', 'gender'=>'m', 'login'=>'Макс'),
    'a8' => array('id'=>'8', 'age'=>'20', 'gender'=>'m', 'login'=>'Илья'),
    'a9' => array('id'=>'9', 'age'=>'20', 'gender'=>'g', 'login'=>'Даша'),
);

$age = $array;

foreach ($array as $key=>$value){
    $age[$key] = $value['age'];
}

$gender = $array;

foreach ($array as $key=>$value){
    $gender[$key] = $value['gender'];
}

array_multisort($age, $gender, $array); // сортировка по возрасту
print_r($array);

echo "<hr>";
array_multisort( $gender,$age, $array);// сортировка по gender
print_r($array);


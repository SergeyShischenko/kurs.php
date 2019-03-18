<?php

<?php

//1) Создайте переменную $a и присвойте ей значение 2019. Выведите значение этой переменной на экран и ее тип.

$a = 2019;

echo 'Значение переменной "$a" = '.$a.'.'.'<br>';
echo 'Значение переменной "$a" и ее тип = ';
echo var_dump($a).'<br>';


//2) Создать константу NAME и присвоить ей свое имя, создать переменную $age и присвоить ей свой возраст. Выведити на экран 2 строки, например: 1 - Меня зовут: Сергей, 2 - Мой возраст 12 лет. Удалить(обнулить) переменную - $age.

define('SERGEY', 47);
define('POTT', 'Привет чувак');
echo POTT.'<br>';
$consnanta = SERGEY.'<br>';
echo constant('POTT');
echo '<br>'.'Константа "SERGEY" = '. SERGEY. '<br>' ;
echo 'Второй способ вывода Константы "SERGEY" = '.$consnanta.'<br>';

echo '1. Меня зовут Cергей.'.'<br>';
echo '2. Мой возраст - '. SERGEY.' лет.'.'<br>';

$age = 47;
unset($age);

echo $age.'<br>';

var_dump($age);
echo '<br>';

if (defined('POTTL')){
    echo 'Константа есть' .true;
}else echo 'Константы нет';
echo '<br>';


function foo(&$var) {
    $var++;
}

$a = 5;
foo($a);
echo $a;

echo '<br>';
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;

$myValue = &$obj->getValue(); // $myValue указывает на $obj->value, равное 42.
$obj->value = 2;
echo $myValue;                // отобразит новое значение $obj->value, то есть 2.



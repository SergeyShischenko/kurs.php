<meta charset="utf-8">
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


echo '<hr>';

function fool(&$var){
    $var++;
}

$a = 5;
fool($a);
echo $a;
echo '<hr>';

//---------------19.09.19

$str = 'StrlenThis is still a test.';
$last = $str[strlen($str)-5];
echo $last;
echo '<br>';


$fofo = 'This is still a test.';
$resalt = substr($fofo, -2);
echo $resalt;

echo '<br>';


$fofo = 'This is still a test';
$resalt = substr_replace($fofo, '/', -1);
echo $resalt;
echo '<br>';
echo $resalt{5};

echo '<br>';
$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
echo '<br>';


//trim — Удаляет пробелы (или другие символы) из начала и конца строки

$fofo = 'Thi/s i\s st*ill a te?st.';
$resalt = trim($fofo);
var_dump($resalt, 'T');

echo "<br>\n";

$massiv = [
    'Яблоко'=>'1',
    'Груша'=>'2',
    'Лимон'=>'3',
    'Арбуз'=>'4',
    ];
var_dump($massiv);
echo "<br>\n";
var_dump(array_values($massiv));


echo "<br>\n";
$obj = (object) 'привет';
echo $obj->scalar;  // выведет 'привет'
echo "<br>\n";


function frukt ($vid){
    echo "Вы хотите $vid апельсин?";
}
call_user_func('frukt', 'кислых');
call_user_func('frukt', 'сладких');
echo "<br>\n";



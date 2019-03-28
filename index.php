

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


echo '<hr>';
echo 'ДЗ 4 ----------------------------<br>';

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

$name_arrey = [1=>'Иванов',2=> 'Иван', 3=> 'Петрович'];
$two_a = mb_substr($name_arrey[2], 0,1);
$three_a = mb_substr($name_arrey[3], 0,1);

echo "$name_arrey[1] $two_a.$three_a.<br>";






//ДЗ № 5 Создать многомерный массив, первый уровень - ключи языка: ru, en. Они в свою очередь седержат массивы из значениями дней недели на соответствующем языке. В скрипт передать 2 пераметра через GET запрос: 'lang' и 'day' и вывести значение. lang - тип языка, строка. day - номер дня недели, цыфра.
$days_week = [
        'ru'=>[1=>'понедельник',2=>'вторник',3=>'среда',4=>'четверг',5=>'пятница',6=>'суббота',7=>'воскресенье'],
        'en'=>[1=>'monday',2=>'tuesday',3=>'wednesday',4=>'thursday',5=>'friday',6=>'saturday',7=>'sunday'],
];

echo "<hr>";



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

echo "<hr>";
/*ДЗ № 7 Создать массив с 90 до 150 и шаг - 3. Ключом этого массива будет аналогичный массив но в обратном порядке. Например у ключа 90 будет значение 150. Создать еще один аналогичный массив но с сортировкой по возрастанию ключа. Вывести эти 2 массива.*/

$arr1 = array(
    90 => array(150),
    93 => array(147),
    96 => array(144),
    99 => array(141),
    102 => array(138),
    105 => array(135),
    108=> array(132),
    111 => array(129),
    114 => array(126),
    117 => array(123),
    120 => array(120),
    123 => array(117),
    126 => array(114),
    129 => array(111),
    132 => array(108),
    135 => array(105),
    138 => array(102),
    141 => array(99),
    144 => array(96),
    147 => array(93),
    150 => array(90),

);
print_r($arr1);
echo "<hr>";
$arr2 = array(
    150 => array(150),
    147 => array(147),
    144 => array(144),
    141 => array(141),
    138 => array(138),
    135 => array(135),
    132=> array(132),
    129 => array(129),
    126 => array(126),
    123 => array(123),
    120 => array(120),
    117 => array(117),
    114 => array(114),
    111 => array(111),
    108 => array(108),
    105 => array(105),
    102 => array(102),
    99 => array(99),
    96 => array(96),
    93 => array(93),
    90 => array(90),

);
print_r($arr2);











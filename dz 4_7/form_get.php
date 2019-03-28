<html>
<!--ДЗ № 5 Создать многомерный массив, первый уровень - ключи языка: ru, en. Они в свою очередь седержат массивы из значениями дней недели на соответствующем языке. В скрипт передать 2 пераметра через GET запрос: 'lang' и 'day' и вывести значение. lang - тип языка, строка. day - номер дня недели, цыфра.-->
<?php

$days_week = [
'ru'=>[1=>'понедельник',2=>'вторник',3=>'среда',4=>'четверг',5=>'пятница',6=>'суббота',7=>'воскресенье'],
'en'=>[1=>'monday',2=>'tuesday',3=>'wednesday',4=>'thursday',5=>'friday',6=>'saturday',7=>'sunday'],
];


?>

<form action="get.php" method="GET">
    Язык: <input type="text" name="lang" value="lang"><br>
    День: <input type="text" name="day" value="day"><br>
    <br><input type=submit value="Отправить">
</form>

</html>


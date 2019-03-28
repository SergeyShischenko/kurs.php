<?php

if (isset($_GET['name'])) {
    echo "Имя: {$_GET['name']} <br>";
    echo "Почта: {$_GET['email']} <br>";

    echo "Пол = ";

    switch ($_GET['sex']) {
        case 1:
            echo ":Жентский";
            break;

        case 2:
            echo "Мужской";
            break;
    }
    echo "<br>";

    echo "Запомнить = {$_GET['save']}";
    echo "<br>";
}


if (isset($_POST['name'])) {
    echo "Имя: {$_POST['name']} <br>";
    echo "Почта: {$_POST['email']} <br>";

    echo "Пол = ";

    switch ($_POST['sex']) {
        case 1:
            echo ":Жентский";
            break;

        case 2:
            echo "Мужской";
            break;
    }
    echo "<br>";

    echo "Запомнить = {$_POST['save']}";
    echo "<br>";
}
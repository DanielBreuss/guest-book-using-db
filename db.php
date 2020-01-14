<?php
$link = mysqli_connect("127.0.0.1", "root", "", "gb");

if (!$link) {
    die("Ошибка: Невозможно установить соединение с MySQL.") ;
}
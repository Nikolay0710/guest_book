<?php

const DB_HOST   = 'localhost';
const DB_USER   = 'root';
const DB_PASS 	= '';
const DB_NAME 	= 'guest_book';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}
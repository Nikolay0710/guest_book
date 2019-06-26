<?php

 	/** ===> Конфигурационный файл приветствует вас! <=== **/
 	defined('INDEX') or die('Access denied'); // Проверка на доступность константы \\
    
    define('PAST', 'http://guestBook.loc/');  // Имя домена \\
    define('MODEL', 'model/model.php'); // Имя модели //
    define('CONTROLLER', 'controller/controller.php'); // Имя контроллера \\
    define('VIEW', 'views/'); // Папка с видами //
    define('TEMPLATE', VIEW . 'viewGuestBook/'); // Активный шаблон \\
	
	const DB_HOST = 'localhost';  // Сервер базы данных //
	const DB_USER = 'root'; // Имя пользователя \\
	const DB_PASS = ''; // Пароль пользователя //
	const DB_NAME = 'guest_book'; // Имя базы данных \\

	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$db) {
	    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit();
	}
	/** ===> Конфигурационный файл приветствует вас! <=== **/
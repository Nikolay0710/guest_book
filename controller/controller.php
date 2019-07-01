<?php
    
    /** ===> Контроллер приветствует вас! <=== **/

    //ini_set('display_errors', -1);
    //error_reporting(E_ALL);

    // проверка на доступность константы \\
    defined('INDEX') or die('Access denied');
    
    // стартуем сессию
    session_start();
    
    // подключение модели
    require(MODEL);
    
    // подключение файла функции
    require('functions/functions.php');

    // получение динамичной части шаблона (#content)
    $view = empty($_GET['view']) ? 'main' : $_GET['view'];

    $book = get_guest_book();
    
    switch($view) {
        
        case('guest_book'):
            // страницы
             if(isset($_POST['submit'])) {
			set_guest_book();
			redirect();
		}   
        break;

        case ('search'):
        	$search = get_search();
        break;
        	
        default:
            // если из адресной строки получено имя несуществующего вида
            $view = 'main';
        break;
    }

	// подключение вила
    require(TEMPLATE . 'index.php');
    
    /** ===> Контроллер приветствует вас! <=== **/

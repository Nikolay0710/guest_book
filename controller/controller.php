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

    // получаем массив страниц
    $pages = get_full_pages();

	// получение динамичной части шаблона (#content)
    $view = empty($_GET['view']) ? 'guest_book' : $_GET['view'];

    $book = get_guest_book();
    
    switch($view) {

    	case('page'):
    		$get_page_id = abs( (int) $_GET['page_id'] );
    		$page = get_page($get_page_id);
    	break;
        
        case('guest_book'):
            // страницы
        	$get_page_id = abs( (int) $_GET['page_id'] );
    		$page = get_page($get_page_id);
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
            $view = 'guest_book';
        break;
    }

	// подключение вила
    require(TEMPLATE . 'index.php');
    
    /** ===> Контроллер приветствует вас! <=== **/
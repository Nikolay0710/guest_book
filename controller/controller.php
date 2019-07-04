<?php
    
    /** ===> Контроллер приветствует вас! <=== **/

    //ini_set('display_errors', -1);
    //error_reporting(E_ALL);

    // проверка на доступность константы \\
    defined('INDEX') or die('Access denied');
  
    session_start() ;// стартуем сессию
    
    require(MODEL); // подключение модели
    require('functions/functions.php');  // подключение файла функции

    $pages = get_full_pages(); // получаем массив страниц
    $view = empty($_GET['view']) ? 'guest_book' : $_GET['view']; // получение динамичной части шаблона (#content)
    
    switch($view) {

    	case('page'):
    		if(isset($_GET['page_id'])) {
    			$get_page_id = abs( (int)$_GET['page_id'] );
    			$page = get_page($get_page_id);
    		}
    	break;
        
        case('guest_book'):
            // страницы
        	$get_page_id = abs( (int)$_GET['page_id'] );
    		$page = get_page($get_page_id);

        	 if(isset($_GET['page'])) {
                $list = (int) $_GET['page'];
                if($list < 1) $list = 1;
            } else $list = 1;

            if(isset($_POST['submit'])) {
		  	set_guest_book();
		  	redirect();
	        }

	    // пораметры для навигации
            $count_pages = count_oll_guest_book(); // получение общее количество товаров конкретной категории
            $pages_count = ceil($count_pages / COUNT_COMMENTS); // кол-во товаров и округляем до целого числа
            if(!$pages_count) $pages_count = 1; // должна быть хотя бы 1 страница
            if($list > $pages_count) $list = $pages_count; // если запрошенная страница больше максимума
            $start_pos = (($list - 1) * COUNT_COMMENTS); // начальная позиция для запроса
            $book = get_guest_book($start_pos, COUNT_COMMENTS); // получение гостевой книги
        break;

        case ('search'):
        	$search = get_search();
        break;
        	
        default:
            // если из адресной строки получено имя несуществующего вида
            $view = 'guest_book';
        break;
    }

    require(TEMPLATE . 'index.php'); // подключение вила
    
    /** ===> Контроллер приветствует вас! <=== **/

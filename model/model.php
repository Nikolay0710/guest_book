<?php

	function get_full_pages()
	{
		$query = "SELECT `id`, `iconImg`, `titleSite`, `namePage` FROM `pages`";
		$res_select_pages = mysqli_query($GLOBALS['db'], $query) or die(mysqli_error($GLOBALS['db']));
		$get_array_pages = [];
		while($row = mysqli_fetch_assoc($res_select_pages)) {
			$get_array_pages[] = $row;
		}
		return $get_array_pages;
	}

	function get_page($get_page_id)
	{
		$query = "SELECT `metaKey`, `metaDes`, `iconImg`, `imgPage`, `titleSite`, `textSite` FROM `pages` WHERE `id` = $get_page_id";
		$res_select_page = mysqli_query($GLOBALS['db'], $query) or die(mysqli_error($GLOBALS['db']));
		$get_page = [];
		while($row = mysqli_fetch_assoc($res_select_page)) {
			$get_page = $row;
		}
		return $get_page;
	}
	
	function set_guest_book()
	{
		$userName 	= cleanHtmlCodes($_POST['userName']);
		$email 		= trim($_POST['email']);
		$fullText 	= trim(htmlspecialchars(($_POST['fullText'])));
		$homePage 	= trim($_POST['homePage']);
		$meta 		= cleanHtmlCodes($_POST['meta']);

		if(!empty($userName) && !empty($email) && !empty($fullText) && !empty($meta)) {

			if(stristr($email, 'http://') === FALSE) $url = $homePage;
			else $url = 'http://' . $homePage;

			$query = "INSERT INTO `book` (`userName`, `email`, `text`, `homePage`, `date`, `meta`) VALUES ('$userName','$email', '$fullText', '$url', NOW(), '$meta')";

			$result = mysqli_query($GLOBALS['db'], $query) or die(mysqli_error($GLOBALS['db']));
			if(mysqli_affected_rows($GLOBALS['db']) > 0)
				$_SESSION['notifications']['resultat'] = "<span class='green'>Новый коментарии успешно был добавлен!</span>";

		} else $_SESSION['notifications']['resultat'] = "<span class='red'>Не заполнены обязательные поля?</span>";

	}

	function get_guest_book() 
	{

		$query = "SELECT `userName`, `email`, `text`, `homePage`, `date` FROM `book`";
		$result = mysqli_query($GLOBALS['db'], $query) or die(mysqli_error($GLOBALS['db']));
        
        $book = array();
        while($row = mysqli_fetch_assoc($result)) {
        	$book[] = $row;
        }

        return $book;
	}

	function get_search()
	{
		$search = cleanHtmlCodes($_GET['search']);

		$query = "SELECT `userName`, `email`, `text`, `homePage`, `date` FROM `book`
		WHERE `userName` LIKE '$search%' OR `email` LIKE '$search%' OR `date` LIKE '$search%'";

		$result = mysqli_query($GLOBALS['db'], $query) or die(mysqli_error($GLOBALS['db']));

		if(mysqli_num_rows($result) > 0) {
			$book = array();
			while($row = mysqli_fetch_assoc($result)) {
				$book[] = $row;
			}
			return $book;
		} else {
			$_SESSION['notifications']['resultat'] = "По запросу $search  <span class='red'>Не чего не найдено.</span>";
		}
	}
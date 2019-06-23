<?php

	//ini_set('display_errors', -1);
	//error_reporting(E_ALL);

	session_start();

	require 'config.php';
	require 'functions.php';

	if(isset($_POST['submit'])) {
		set_guest_book();
		redirect();
	}

	$book = get_guest_book();

?>

<!DOCTYPE HTML>
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Вёрстка</title>
	<meta http-equiv = "content-type" content = "text/html; charset = utf-8" />
	<link rel="stylesheet" href="styles/main.css" type="text/css" />
</head>
<body>
	<div id="container">
		<div id='header'>
			<img src = "images/logo.png" alt = "Логотип сайта" />
			<nav>
				<a href = "index.php">
					<img src = "images/makeup_22.png" alt = "Homepage" />
						<br />
					<span>Homepage</span>
				</a>
						
				<a href = "#">
					<img src = "images/makeup_25.png" alt = "Journal" />
						<br />
					<span>Journal</span>
				</a>
						
				<a href = "#">
					<img src = "images/makeup_14.png" alt = "Portfolio" />
						<br />
					<span>Portfolio</span>
				</a>
						
				<a href = "#">
					<img src = "images/makeup_28.png" alt = "About Me" />
						<br />
					<span>About Me</span>
				</a>
					
				<a href = "./guest_book.php" class='action'>
					<img src = "images/makeup_31.png" alt = "Guest book" />
						<br />
					<span>Guest book</span>
				</a>
			</nav>
		</div>
		
		<div id="content">
			<div id="post">
			
				<h3>Гостевая книга. Поля со звездочкой <span class='red'>*</span> обязательны для заполнения!</h3>

				<form action="" method="POST" name='form_guest_book'>
					<table class='table'>
						<tr>
							<td class='w'>
								<label for='username'>Username: <span class='red'>*</span></label>
							</td>
							<td>	
								<input type='text' name='userName' id='username' required />
							</td>
							<td>
								Цифры и буквы латинского алфавита.
							</td>
						</tr>
						<tr>
							<td class='w'>
								<label for='email'>Email: <span class='red'>*</span></label>
							</td>
							<td>
								<input type='email' pattern='[^ @]*@[^ @]*' name='email' id='email' required>
							</td>
							<td>
								Формат email @mail.ru, @list.ru, @bk.ru, @inbox.ru
							</td>
						</tr>
						<tr>
							<td class='w'>
								<label for='text'>Ваше сообщение: <span class='red'>*</span></label>
							</td>
							<td>
								<textarea name='fullText' id='text' required></textarea>
							</td>
							<td>
								Текст сообщения, HTML тэги недопустимы.
							</td>
						</tr>
						<tr>
							<td class='w'>
								<label for='homepage'>Homepage:</label>
							</td>
							<td>
								<input type='url' name='homePage' id='homepage'>
							</td>
							<td>
								Название вашего сайта если есть) <span class='decorationText'></span>
							</td>
						</tr>
						<tr>
							<td class='w'>
								<label for='tegs'>Теги: <span class='red'>*</span></label>
							</td>
							<td>
								<input id='text' id='tegs' name='meta' required></input>
							</td>
							<td>
								Теги, ключевые слова сообщения.
							</td>
						</tr>
						<tr>
							<td class='w'>
								<label for='captcha'>CAPTCHA: <span class='red'>*</span></label>
							</td>
							<td>
								<input type='image' src='images/makeup_28.png' id='captcha'>
							</td>
							<td>
								Цифры и буквы латинского алфавита, изображение.
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<button type='submit' name='submit' id='sub'> Отправит </button>
							</td>
						</tr>
					</table>
				</form>

				<?php if(!empty($_SESSION['notifications']['resultat'])) echo $_SESSION['notifications']['resultat']; ?>
				<?php unset($_SESSION['notifications']); ?>

			</div>

			<div id="post">

				<h3>Сообщение гостей!</h3>

				<?php if(!empty($book)): ?>
					<form action='search.php' method='get' name='search' class='search'>
						<input type='text' name='search' required placeholder='Поиск'>
						<button type='submit'>Найти</button>
					</form> <hr />
					<?php foreach ($book as $value): ?>
						<table class='border'>
							<tfoot>
								<tr>
									<td>Автор: <br /> <?=$value['userName']?></td>
									<td><a href='mailto:<?=$value['email']?>'>Перейти на почту</a></td>
									<?php if(!empty($value['homePage'])): ?>
									<td><a href='<?=$value['homePage']?>' target='_blank'>Перейти на сайт</a></td>
									<?php else: ?>
									<td>Сайт не указан</td>
									<?php endif; ?>
									<td>Дата, и время опубликования: <br /> <?=$value['date']?></td>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td colspan='4'>Текст сообщение: <?=$value['text']?></td>
								</tr>
							</tbody>
						</table>
					<?php endforeach;

				endif; ?>
				
			</div>
		</div>

		<div id='footer'>
			<div id="separatot">
				<img src="images/separator.png" alt="" />
			</div>
			<div id='inFoot'>
				<div id="copy"> &copy; 2019. All Rights Reserved. </div>
				<div class="right">Nikolay Ogreba</div>
			</div>
		</div>
	</div>

</body>
</html>
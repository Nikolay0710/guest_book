<?php

	require 'config.php';
	require 'functions.php';

	session_start();

	$search = isset($_GET['search']) ? get_search() : '';

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
					
				<a href = "./guest_book.php">
					<img src = "images/makeup_31.png" alt = "Guest book" />
						<br />
					<span>Guest book</span>
				</a>
			</nav>
		</div>
		
		<div id="content">

			<div id="post">

				<h3>Результат поиска</h3>

				<?php if(!empty($search)): ?>
				
					<?php foreach ($search as $value): ?>
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

				<?php if(!empty($_SESSION['notifications']['resultat'])) echo $_SESSION['notifications']['resultat']; ?>
				<?php unset($_SESSION['notifications']); ?>
				
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
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
<?php endforeach; endif; ?>
<?php if(!empty($_SESSION['notifications']['resultat'])) echo $_SESSION['notifications']['resultat']; ?>
<?php unset($_SESSION['notifications']); ?>
<?php if(!empty($page)): ?>
	<h3><?=$page['titleSite']?></h3>
	<?php if(isset($page['imgPage']) && $page['imgPage'] != 'no img'): ?>
	<img src='<?=TEMPLATE?>images/bg_pages/<?=$page['imgPage']?>' alt='<?=$page['titleSite']?>' />
	<?php endif; ?>
	<?=$page['textSite']?>
<?php else: ?>
	<h3>Такой страницы нет на нашем сайте..</h3>
<?php endif; ?>

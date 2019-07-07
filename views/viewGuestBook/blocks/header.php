<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?=isset($page["titleSite"]) ? $page["titleSite"] : "Гостевая книга"?></title>
    <meta http-equiv="content-type" content = "text/html; charset = utf-8" />
    <meta name='keywords' content='<?=isset($page["metaKey"]) ? $page["metaKey"] : "Ключевые слова, главной страницы сайта" ?>' />
    <meta name='description' content='<?=isset($page["metaDes"]) ? $page["metaDes"] : "Описание главной страницы сайта" ?>' />
    <link rel="stylesheet" href="<?=TEMPLATE?>styles/main.css" type="text/css" />
    <script src="<?=TEMPLATE?>scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=TEMPLATE?>scripts/form.js"></script>
</head>
<body>
    <div id="container">
        <div id='header'>
            <img src="<?=TEMPLATE?>images/logo.png" alt = "Логотип сайта" />
            <nav>
                <?php foreach ($pages as $value): ?>
                    
                    <?php if(isset($value['namePage']) && $value['namePage'] === 'no name'): ?>
                        <a href="?view=page&amp;page_id=<?=$value['id']?>">
                        <img src="<?=TEMPLATE?>images/<?=$value['iconImg']?>" alt="<?=$value['titleSite']?>" />
                            <br />
                        <span><?=$value['titleSite']?></span>
                    </a>
                    <?php else: ?>
                        <a href="?view=<?=$value['namePage']?>&amp;page_id=<?=$value['id']?>">
                        <img src="<?=TEMPLATE?>images/<?=$value['iconImg']?>" alt="<?=$value['titleSite']?>" />
                            <br />
                        <span><?=$value['titleSite']?></span>
                    </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div>
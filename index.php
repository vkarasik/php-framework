<?php
require './Fw/init.php';
$pager = $app->pager;
$app->header();
$pager->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
$pager->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
$pager->addJs('script.js');
$pager->addJs('script.min.js');
$pager->addString('meta name="viewport" content="width=device-width, initial-scale=1.0"');
$pager->setProperty('title', 'Main Page Title');
$pager->setProperty('head', 'Page Head');
$app->includeComponent(
    'fw:element.list',
    'default',
    [
        "sort" => "id",
        "limit" => 4,
        "show_title" => "Y",
    ]
);
?>

<pre>
--------- 20.10.2022 ---------
1) Создан класс Dictionary
2) Созданы классы Server и Request
3) Создан и подключен компонент element.list

--------- 06.10.2022 ---------
1) Рефакторинг метода Page::getAllReplace()
2) Рефакторинг методов Page::addJs(), Page::addCss(), Page::addStr()

--------- 05.10.2022 ---------
1) Создан класс Page для работы с содержимым html страницы

--------- 04.10.2022 ---------
1) Создан trait Singleton
2) Создана структура шаблона сайта
3) Внедрен буффер
</pre>

<?php $app->footer();?>
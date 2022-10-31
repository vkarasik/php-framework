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
$app->includeComponent(
    'fw:interface.form',
    'default',
    [
        'additional_class' => 'window--full-form',
        'attr' => [
            'data-form-id' => 'form-123',
        ],
        'method' => 'post',
        'action' => 'send.php',
        'elements' => [
            [
                'type' => 'text',
                'name' => 'login',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17',
                    'data-class' => '17',
                ],
                'title' => 'Логин',
                'default' => 'Введите имя',
            ],
            [
                'type' => 'password',
                'name' => 'password',
                'title' => 'Пароль',
            ],
            [
                'type' => 'number',
                'name' => 'age',
                'title' => 'Возраст (18-120)',
                'max' => 120,
                'min' => 18,
            ],
            [
                'type' => 'select',
                'name' => 'server',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17',
                ],
                'multiple' => false,
                'title' => 'Выберите сервер',
                'list' => [
                    [
                        'title' => 'Онлайнер',
                        'value' => 'onliner',
                        'additional_class' => 'mini--option',
                        'attr' => [
                            'data-id' => '188',
                        ],
                        'selected' => true,
                    ],
                    [
                        'title' => 'Тутбай',
                        'value' => 'tut',
                    ],
                ],
            ],
            [
                'type' => 'checkbox',
                'name' => 'remember',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17',
                ],
                'title' => 'Запомнить меня',
            ],
            [
                'type' => 'radio',
                'name' => 'options',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17',
                ],
                'title' => 'Опция 1',
            ],
            [
                'type' => 'radio',
                'name' => 'options',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17',
                ],
                'title' => 'Опция 2',
            ],
            [
                'type' => 'textarea',
                'name' => 'description',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17',
                ],
                'title' => 'Опишите проблему',
            ],

        ],
    ]
);
?>

<pre>
--------- 31.10.2022 ---------
1) Подключен Bootstrap
2) Создан и подключен компонент interface.form

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
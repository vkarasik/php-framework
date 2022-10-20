<?php

namespace Fw\Core\Component;

/**
 * Общий класс для всех компанентов
 * @param array $result результат работы компонента
 * @param string $id ID компонента
 * @param array $params параметры настройки компонента
 * @param Fw\Core\Component\Template $template экземпляр класса шаблона компонента
 * @param string $path путь к файловой структуре компонента
 *
 * @method executeComponent() исполнение компонента
 */
abstract class Base
{
    public $result = array();
    public $id = null;
    public $params = array();
    public $template = null;
    public $path = null;

    public function executeComponent()
    {
    }
}

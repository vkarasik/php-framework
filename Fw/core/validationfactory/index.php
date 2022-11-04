<?php

require dirname(dirname(__DIR__)) . '/init.php';

use Fw\Core\Validationfactory\Factories\EmailFactory;
use Fw\Core\Validationfactory\Factories\MinLengthFactory;
use Fw\Core\Validationfactory\Factories\ValidatorFactory;

function validate(ValidatorFactory $validator)
{
    $validator = $validator->getValidator();
    return $validator->validate();
}

echo 'Min Length: ' . validate(new MinLengthFactory('php', 5)) . PHP_EOL;
echo 'Email: ' . validate(new EmailFactory('mail@mail.com')) . PHP_EOL;

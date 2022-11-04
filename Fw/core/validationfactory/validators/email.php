<?php

namespace Fw\Core\Validationfactory\Validators;

use Fw\Core\Validationfactory\Validators\Validator;

class Email implements Validator
{
    private $value;
    public function __construct($value)
    {
        $this->value = $value;
    }
    public function validate(): bool
    {
        return preg_match('/^(.+)@(.+)\.(.+)$/', $this->value);
    }
}

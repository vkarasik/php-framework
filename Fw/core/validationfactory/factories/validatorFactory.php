<?php

namespace Fw\Core\Validationfactory\Factories;

use Fw\Core\Validationfactory\Validators\Validator;

abstract class ValidatorFactory
{

    protected $rule = null;
    protected $value = null;

    public function __construct($value, $rule = null)
    {
        $this->rule = $rule;
        $this->value = $value;
    }
    abstract public function getValidator(): Validator;
}

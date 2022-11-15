<?php

namespace Fw\Core\Validationfactory\Validators;

use Fw\Core\Validationfactory\Validators\Validator;

class MinLength implements Validator
{
    private $value;
    private $rule;

    public function __construct($rule, $value)
    {
        $this->value = $value;
        $this->rule = $rule;
    }

    public function validate(): bool
    {
        if (is_array($this->value)) {
            return count($this->value) >= $this->rule;
        }
        if (is_string($this->value)) {
            return mb_strlen($this->value) >= $this->rule;
        }
    }
}

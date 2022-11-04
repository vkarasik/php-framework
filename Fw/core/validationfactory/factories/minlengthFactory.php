<?php

namespace Fw\Core\Validationfactory\Factories;

use Fw\Core\Validationfactory\Validators\MinLength;
use Fw\Core\Validationfactory\Validators\Validator;

class MinLengthFactory extends ValidatorFactory
{
    public function getValidator(): Validator
    {
        return new MinLength($this->rule, $this->value);
    }
}

<?php

namespace Fw\Core\Validationfactory\Factories;

use Fw\Core\Validationfactory\Validators\Email;
use Fw\Core\Validationfactory\Validators\Validator;

class EmailFactory extends ValidatorFactory
{
    public function getValidator(): Validator
    {
        return new Email($this->value);
    }
}

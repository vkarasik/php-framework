<?php
/**
 * Min lenght validator class
 */
namespace Fw\Core\Validation\Validators;

use Fw\Core\Validation\Validator;

class InList extends Validator
{
    public function validate($value): bool
    {
        return in_array($value, $this->rule);
    }
}

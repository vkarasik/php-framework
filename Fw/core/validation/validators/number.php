<?php
/**
 * Min lenght validator class
 */
namespace Fw\Core\Validation\Validators;

use Fw\Core\Validation\Validator;

class Number extends Validator
{
    public function __construct()
    {
    }

    public function validate($value): bool
    {
        return (is_int($value) || is_float($value));
    }
}

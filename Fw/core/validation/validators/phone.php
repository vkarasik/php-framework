<?php
/**
 * Min lenght validator class
 */
namespace Fw\Core\Validation\Validators;

use Fw\Core\Validation\Validator;

class Phone extends RegExp
{
    public function __construct()
    {
    }

    public function validate($value): bool
    {
        return preg_match('/^(\+375|80)(29|44|33|25)\d{7}$/', $value);
    }
}

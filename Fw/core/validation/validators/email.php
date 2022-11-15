<?php
/**
 * Min lenght validator class
 */
namespace Fw\Core\Validation\Validators;

use Fw\Core\Validation\Validator;

class Email extends RegExp
{
    public function __construct()
    {
    }

    public function validate($value): bool
    {
        return preg_match('/^(.+)@(.+)\.(.+)$/', $value);
    }
}

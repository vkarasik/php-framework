<?php
/**
 * Base validation class
 */

namespace Fw\Core\Validation;

abstract class Validator
{
    protected $rule = null;

    public function __construct($rule)
    {
        $this->rule = $rule;
    }

    abstract public function validate($value): bool;
}

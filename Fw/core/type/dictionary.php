<?php
/**
 * Class Dictionary
 */
namespace Fw\Core\Type;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

class Dictionary implements IteratorAggregate, Countable, ArrayAccess
{
    private $container = array();

    public function __construct()
    {
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->arr);
    }

    public function count(): int
    {
        return count($this->events);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    public function offsetGet(mixed $offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

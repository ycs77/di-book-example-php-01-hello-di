<?php

namespace DI\HelloDI;

use ArrayAccess;
use DI\HelloDI\Contracts\Config as ConfigContract;

class ConfigRepository implements ArrayAccess, ConfigContract
{
    protected array $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function get(string $key)
    {
        return $this->items[$key] ?? null;
    }

    public function set(string $key, string $value): void
    {
        $this->items[$key] = $value;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function has(string $key): bool
    {
        return isset($this->items[$key]);
    }

    public function delete(string $key): void
    {
        unset($this->items[$key]);
    }

    public function offsetExists($offset)
    {
        return $this->has($offset);
    }

    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    public function offsetUnset($offset)
    {
        $this->delete($offset);
    }
}

<?php

namespace DI\HelloDI\Contracts;

interface Config
{
    public function get(string $key);

    public function set(string $key, string $value): void;

    public function all(): array;

    public function has(string $key): bool;

    public function delete(string $key): void;
}

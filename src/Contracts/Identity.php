<?php

namespace DI\HelloDI\Contracts;

interface Identity
{
    public function isAuthenticated(): bool;
}

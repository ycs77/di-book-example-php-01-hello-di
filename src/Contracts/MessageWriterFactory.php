<?php

namespace DI\HelloDI\Contracts;

use DI\HelloDI\Contracts\MessageWriter;

interface MessageWriterFactory
{
    public function make(): MessageWriter;
}

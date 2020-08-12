<?php

namespace DI\HelloDI;

use DI\HelloDI\Contracts\MessageWriter;

class Valediction
{
    protected MessageWriter $writer;

    public function __construct(MessageWriter $writer)
    {
        $this->writer = $writer;
    }

    public function exclaim()
    {
        $this->writer->write('Hello DI!');
    }
}

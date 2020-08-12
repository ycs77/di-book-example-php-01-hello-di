<?php

namespace DI\HelloDI\MessageWriter;

use DI\HelloDI\Contracts\MessageWriter;

class ConsoleMessageWriter implements MessageWriter
{
    public function write(string $message)
    {
        echo $message.PHP_EOL;
    }
}

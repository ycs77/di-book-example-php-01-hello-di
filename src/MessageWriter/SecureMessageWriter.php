<?php

namespace DI\HelloDI\MessageWriter;

use DI\HelloDI\Contracts\Identity;
use DI\HelloDI\Contracts\MessageWriter;

class SecureMessageWriter implements MessageWriter
{
    protected MessageWriter $writer;
    protected Identity $identity;

    public function __construct(MessageWriter $writer, Identity $identity)
    {
        $this->writer = $writer;
        $this->identity = $identity;
    }

    public function write(string $message)
    {
        if ($this->identity->isAuthenticated()) {
            $this->writer->write($message);
        }
    }
}

<?php

namespace DI\HelloDI;

use DI\HelloDI\Contracts\Config;
use DI\HelloDI\Contracts\MessageWriter;
use DI\HelloDI\Contracts\MessageWriterFactory as MessageWriterFactoryContract;

class MessageWriterFactory implements MessageWriterFactoryContract
{
    protected Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function make(): MessageWriter
    {
        $class = $this->getWriterClass();

        return new $class;
    }

    protected function getWriterClass(): string
    {
        return implode('\\', [
            __NAMESPACE__,
            'MessageWriter',
            ucfirst($this->config->get('messageWriter')).'MessageWriter',
        ]);
    }
}

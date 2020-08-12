<?php

namespace DI\HelloDI\Test;

use DI\HelloDI\Contracts\MessageWriter;
use DI\HelloDI\Salutation;

// ---- Code Listing 1.4 ----
test('exclaim will write correct message to MessageWriter', function () {
    // Arrange
    $writer = new SpyMessageWriter();
    $sut = new Salutation($writer);

    // Act
    $sut->exclaim();

    // Assert
    assertEquals('Hello DI!', $writer->writtenMessage);
});

class SpyMessageWriter implements MessageWriter
{
    public string $writtenMessage = '';

    public function write(string $message)
    {
        $this->writtenMessage .= $message;
    }
}

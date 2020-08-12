<?php

use DI\HelloDI\ConfigRepository;
use DI\HelloDI\Contracts\Identity;
use DI\HelloDI\MessageWriter\ConsoleMessageWriter;
use DI\HelloDI\MessageWriter\SecureMessageWriter;
use DI\HelloDI\MessageWriterFactory;
use DI\HelloDI\Salutation;
use DI\HelloDI\Valediction;

require_once __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Code Listing 1.1: 建立 MessageWriter 物件
|--------------------------------------------------------------------------
*/

/** @var \DI\HelloDI\Contracts\MessageWriter */
$writer = new ConsoleMessageWriter();

/*
|--------------------------------------------------------------------------
| Code Listing 1.2: 使用晚期繫結架構建立 MessageWriter
|--------------------------------------------------------------------------
*/

// /** @var \DI\HelloDI\Contracts\Config */
// $config = new ConfigRepository(
//     require __DIR__.'/config.php'
// );

// /** @var \DI\HelloDI\Contracts\MessageWriterFactory */
// $writerFactory = new MessageWriterFactory($config);

// /** @var \DI\HelloDI\Contracts\MessageWriter */
// $writer = $writerFactory->make();

/*
|--------------------------------------------------------------------------
| Code Listing 1.3: 新增提高安全性的功能
|--------------------------------------------------------------------------
*/

// $mockIdentity = new class implements Identity {
//     public function isAuthenticated(): bool
//     {
//         return true;
//     }
// };

// /** @var \DI\HelloDI\Contracts\MessageWriter */
// $writer = new SecureMessageWriter(
//     new ConsoleMessageWriter(),
//     $mockIdentity
// );

/*
|--------------------------------------------------------------------------
| Inject MessageWriter
|--------------------------------------------------------------------------
*/

$salutation = new Salutation($writer);
$salutation->exclaim();

/*
|--------------------------------------------------------------------------
| Code Listing 1.5: 建立 MessageWriter 物件
|--------------------------------------------------------------------------
*/

// /** @var \DI\HelloDI\Contracts\MessageWriter */
// $writer1 = new ConsoleMessageWriter();

// /** @var \DI\HelloDI\Contracts\MessageWriter */
// $writer2 = new ConsoleMessageWriter();

// $salutation = new Salutation($writer1);
// $valediction = new Valediction($writer2);

/*
|--------------------------------------------------------------------------
| Code Listing 1.6: 建立 MessageWriter 物件
|--------------------------------------------------------------------------
*/

// /** @var \DI\HelloDI\Contracts\MessageWriter */
// $writer = new ConsoleMessageWriter();

// $salutation = new Salutation($writer);
// $valediction = new Valediction($writer);

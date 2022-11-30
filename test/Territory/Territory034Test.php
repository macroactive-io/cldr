<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory034;
use PHPUnit\Framework\TestCase;

class Territory034Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory034();

        self::assertSame('034', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}

<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory011;
use PHPUnit\Framework\TestCase;

class Territory011Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory011();

        self::assertSame('011', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}

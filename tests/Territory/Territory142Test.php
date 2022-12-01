<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory142;
use PHPUnit\Framework\TestCase;

class Territory142Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory142();

        self::assertSame('142', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
